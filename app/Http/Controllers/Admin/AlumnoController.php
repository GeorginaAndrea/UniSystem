<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Facultad;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Audit\LogCambio;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('ClaveAlumno','asc')->paginate(9);
        return view('admin.alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::pluck('ClaveCarrera', 'NombreCarrera');
        // $facultades = Facultad::pluck('NombreFacultad', 'ClaveFacultad');
        return view('admin.alumnos.create', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'ApePaterno' => 'required|string|max:40',
            'ApeMaterno' => 'required|string|max:40',
            'Nombres' => 'required|string|max:50',
            'Curp' => 'required|string|size:18|unique:alumno,Curp',
            'Genero' => 'required|string|size:1',
            'EstCivil' => 'required|string|max:20',
            'FechaNacimiento' => 'required|date',
            'Email' => 'required|email|max:50',
            'Celular' => 'required|string|size:10',
            'Estado' => 'required|string|max:15',
            'Municipio' => 'required|string|max:40',
            'Colonia' => 'required|string|max:50',
            'Direccion' => 'required|string|max:150',
            'Telefono' => 'required|string|size:10',
            // 'ClaveFacultad' => 'required|integer|exists:facultad,ClaveFacultad',
            'ClaveCarrera' => 'required|integer|exists:carrera,ClaveCarrera',
        ],
        [
            'Curp.unique' => 'La CURP ingresada ya está registrada',
            'Curp.size' => 'La CURP debe tener exactamente 18 caracteres',
            'ClaveAlumno' => 'required|string|unique:alumno,ClaveAlumno',

            // ... otros mensajes personalizados
        ]);

        try {
            $user = User::create([
                'name' => $validatedData['Nombres'] . ' ' . $validatedData['ApePaterno'],
                'email' => $validatedData['Email'],
                'password' => bcrypt('contraseñaTemporal123'), // puedes generar o enviar por correo
            ]);
    
            // Asignar rol de alumno
            $user->assignRole('alumno');
            $claveAlumno = 'ALU' . strtoupper(Str::random(8));
            $alumno = Alumno::create(array_merge([
                'ClaveAlumno' => $claveAlumno,
                'FechaIngreso' => now()
            ], $validatedData));
            $datos_nuevos = $alumno->toArray();
            // Alumno::create(array_merge(['ClaveAlumno', 'fechaIngreso' => $claveAlumno, now()], $validatedData));

            try {
                $log_cambioalumno = LogCambio::create([
                    'usuario_id' => Auth::id(),
                    'tabla_afectada' => 'alumnos',
                    'tipo_cambio' => 'INSERT',
                    'llave_primaria' => $alumno->ClaveAlumno,
                    'descripcion' => 'Se registró un nuevo alumno con ClaveAlumno: ' . $claveAlumno,
                    'datos_nuevos' => json_encode($datos_nuevos),
                     // o $user->id si aplica
                    'fecha_cambio' => now(),
                ]);
            } catch (\Exception $e) {
                dd('Error alguardar en log_cambios: ' . $e->getMessage());
            }
            
            return redirect()->route('admin.alumnos.index')
                   ->with('success', 'Alumno registrado exitosamente');
        } catch (\Exception $e) {
            return redirect()->back()
                   ->with('error', 'Error al registrar: ' . $e->getMessage())
                   ->withInput();
        }
    
    }


    public function show(Alumno $alumno)
    {
        $carreras = Carrera::pluck('NombreCarrera', 'ClaveCarrera');
        $facultades = Facultad::pluck('NombreFacultad', 'ClaveFacultad');
        return view('admin.alumnos.show', compact('alumno', 'carreras', 'facultades'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($alumno)

    {
        $carreras = Carrera::pluck('ClaveCarrera', 'NombreCarrera');
        $alumno = Alumno::find($alumno);
        return view('admin.alumnos.edit', compact('alumno', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $validatedData = $request->validate([
            'ApePaterno' => 'sometimes|string|max:40',
            'ApeMaterno' => 'sometimes|string|max:40',
            'Nombres' => 'sometimes|string|max:50',
            'Curp' => 'sometimes|string|size:18|unique:alumno,Curp,'.$alumno->ClaveAlumno.',ClaveAlumno',
            'Genero' => 'sometimes|string|size:1',
            'EstCivil' => 'sometimes|string|max:20',
            'FechaNacimiento' => 'required|date',
            'Email' => 'sometimes|email|max:50',
            'Celular' => 'sometimes|string|size:10',
            'Estado' => 'sometimes|string|max:15',
            'Municipio' => 'sometimes|string|max:40',
            'Colonia' => 'sometimes|string|max:50',
            'Direccion' => 'sometimes|string|max:150',
            'Telefono' => 'sometimes|string|size:10',
            // 'ClaveFacultad' => 'sometimes|integer|exists:facultades,ClaveFacultad',
            'ClaveCarrera' => 'sometimes|integer|exists:carrera,ClaveCarrera',
        ]);
        $datos_anteriores = $alumno->toArray();
    
        $alumno->update($validatedData);
        
        $datos_nuevos = $alumno->fresh()->toArray();

        $ip_local = $request->ip();
        // $ip_gateway = $this->obtenerGateway();
        // $mac_address = $this->obtenerMac($ip_local);
        LogCambio::create([
            'usuario_id' => Auth::id(),
            'tabla_afectada' => 'alumnos',
            'tipo_cambio' => 'UPDATE',
            'llave_primaria' => $alumno->ClaveAlumno,
            'datos_anteriores' => json_encode($datos_anteriores),
            'datos_nuevos' => json_encode($datos_nuevos),
            'ip_local' => $ip_local,
            // 'ip_gateway' => $ip_gateway,
            // 'mac_address' => $mac_address,
        ]);
    

        return redirect()->route('admin.alumnos.index', $alumno)->with('success', 'Datos actualizados exitosamente.');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
