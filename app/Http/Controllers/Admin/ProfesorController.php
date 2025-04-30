<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit\LogCambio;
use App\Models\Facultad;
use App\Models\Profesor;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facultades = Facultad::all('NombreFacultad');
        $profesores = Profesor::orderBy('Nombres','asc')->paginate(10);
        return view('admin.profesores.index',compact('profesores', 'facultades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.profesores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ApePaterno' => 'required|string|max:100',
            'ApeMaterno' => 'required|string|max:100',
            'Nombres' => 'required|string|max:100',
            'Email' => 'required|email|max:100',
            'Telefono' => 'nullable|string|max:15',
            'ClaveFacultad' => 'required|integer',
        ]);
        try {
            $user = User::create([
                'name' => $validatedData['Nombres'] . ' ' . $validatedData['ApePaterno'],
                'email' => $validatedData['Email'],
                'password' => bcrypt('contraseñaTemporal123'), // puedes generar o enviar por correo
            ]);
    
            // Asignar rol de alumno
            $user->assignRole('profesor');

            $claveProfesor = 'PROF' . strtoupper(Str::random(8));

            $profesor = Profesor::create([
                'ClaveProfesor' => $claveProfesor,
                'ApePaterno' => $validatedData['ApePaterno'],
                'ApeMaterno' => $validatedData['ApeMaterno'],
                'Nombres' => $validatedData['Nombres'],
                'Email' => $validatedData['Email'],
                'Telefono' => $validatedData['Telefono'],
                'ClaveFacultad' => $validatedData['ClaveFacultad'],
            ]);

            LogCambio::create([
                'tabla_afectada' => 'profesor',
                'tipo_cambio' => 'INSERT',
                'descripcion' => 'Se registró un nuevo profesor con ClaveProfesor: ' . $claveProfesor,
                'fecha_cambio' => now(),
            ]);

            return redirect('/profesores')->with('success', 'Profesor creado exitosamente.');
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrio un error: ' . $e->getMessage());
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Profesor $profesor)
    {
        return view('admin.profesores.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profesor $profesor)
    {
        return view('admin.profesores.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profesor $profesor)
    {
        $validatedData = $request->validate([
            'ApePaterno' => 'sometimes|string|max:40',
            'ApeMaterno' => 'sometimes|string|max:40',
            'Nombres' => 'sometimes|string|max:50',
            'Email' => 'sometimes|email|max:50',
            'Telefono' => 'sometimes|string|size:10'
        ]);

        $datos_anteriores = $profesor->toArray();

        $profesor->update($validatedData);

        $datos_nuevos = $profesor->fresh()->toArray();

        $ip_local = $request->ip();

        LogCambio::create([
            'usuario_id' => Auth::id(),
            'tabla_afectada' => 'profesores',
            'tipo_cambio' => 'UPDATE',
            'llave_primaria' => $profesor->ClaveProfesor,
            'datos_anteriores' => json_encode($datos_anteriores),
            'datos_nuevos' => json_encode($datos_nuevos),
            'ip_local' => $ip_local,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
