<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Materia;
use Illuminate\Http\Request;
use App\Models\Carrera;
use App\Models\Audit\LogCambio;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $materias = Materia::orderBy('ClaveMateria','asc')->paginate(10);
        // return view('admin.materias.index', compact('materias'));
        $materias = Materia::with('carrera')->get()->groupBy(function($materia) {
            return $materia->carrera->NombreCarrera ?? 'Sin carrera';
        });
    
        return view('admin.materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carreras = Carrera::all();
        return view('admin.materias.create', compact('carreras'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:250',
            'Semestre' => 'required|integer|min:1|max:12',
            'ClaveCarrera' => 'required|integer|exists:carrera,ClaveCarrera',
        ]);

        try {
            $materia = Materia::create($validatedData);

            $datos_nuevos = $materia->toArray();
            try {
                $log_cambiomateria = LogCambio::create([
                    'usuario_id' => Auth::id(),
                    'tabla_afectada' => 'materia',
                    'tipo_cambio' => 'INSERT',
                    'llave_primaria' => $materia->ClaveMateria,
                    'descripcion' => 'Se registró una nueva materia con clave: ' . $materia->ClaveMateria,
                    'datos_nuevos' => json_encode($datos_nuevos),
                     // o $user->id si aplica
                    'fecha_cambio' => now(),
                ]);
            } catch (\Exception $e) {
                dd('Error alguardar en log_cambios: ' . $e->getMessage());
            }


            return redirect()->route('admin.materias.index')
                            ->with('success', 'Materia creada exitosamente.');
        } catch (\Throwable $th) {
            return back()->withErrors(['error' => 'Error al crear la materia.'])
                        ->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Materia $materia)
    {
        return view('admin.materias.show', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($materia)
    {
        $carreras = Carrera::all();
        $materia = Materia::find($materia);
        return view('admin.materias.edit', compact('materia', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materia $materia)
    {
        $validatedData = $request->validate([
            'Nombre' => 'sometimes|string|max:100',
            'Descripcion' => 'sometimes|string|max:250',
            'Semestre' => 'sometimes|integer|min:1|max:12',
            'ClaveCarrera' => 'sometimes|integer|exists:carrera,ClaveCarrera',
        ]);
        $datos_anteriores = $materia->toArray();
    
        $materia->update($validatedData);
        
        $datos_nuevos = $materia->fresh()->toArray();

        $ip_local = $request->ip();

        LogCambio::create([
            'usuario_id' => Auth::id(),
            'tabla_afectada' => 'materia',
            'tipo_cambio' => 'UPDATE',
            'llave_primaria' => $materia->ClaveMateria,
            'datos_anteriores' => json_encode($datos_anteriores),
            'datos_nuevos' => json_encode($datos_nuevos),
            'ip_local' => $ip_local,
            // 'ip_gateway' => $ip_gateway,
            // 'mac_address' => $mac_address,
        ]);

        return redirect()->route('admin.materias.index', $materia)->with('success', 'Datos actualizados exitosamente.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
