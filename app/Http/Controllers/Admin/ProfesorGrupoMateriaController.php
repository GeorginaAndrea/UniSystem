<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfesorGrupoMateria;
use App\Models\Profesor;
use App\Models\GrupoMateria;

class ProfesorGrupoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($grupo)
    {
        // $gruposAsignados = GrupoMateria::whereHas('asignaciones')->get();
        // $gruposSinAsignar = GrupoMateria::whereDoesntHave('asignaciones')->get();
        // $asignaciones = ProfesorGrupoMateria::with(['profesor', 'grupoMateria'])->get();
        // return view('admin.grupos.index', compact('asignaciones', 'gruposAsignados', 'gruposSinAsignar'));
    $grupomaterias = GrupoMateria::where('ClaveGrupo', $grupo)->with('materia')->get();
    $profesores = Profesor::all();

    return view('admin.profesorgrupomateria.index', compact('grupomaterias', 'profesores', 'grupo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $grupo)
    {
        // $profesores = Profesor::all();
        // $grupoMaterias = GrupoMateria::all();
        // return view('asignaciones.create', compact('profesores', 'grupoMaterias'));
        foreach ($request->asignaciones as $claveGrupoMateria => $profesores) {
            ProfesorGrupoMateria::where('ClaveGrupoMateria', $claveGrupoMateria)->delete();
    
            foreach ($profesores as $claveProfesor) {
                ProfesorGrupoMateria::create([
                    'ClaveGrupoMateria' => $claveGrupoMateria,
                    'ClaveProfesor' => $claveProfesor,
                ]);
            }
        }
    
        return redirect()->route('admin.grupos.index')->with('success', 'Profesores asignados correctamente.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'ClaveProfesor' => 'required|exists:profesor,ClaveProfesor',
            'ClaveGrupoMateria' => 'required|exists:grupomateria,ClaveGrupoMateria',
        ]);

        ProfesorGrupoMateria::create($request->only('ClaveProfesor', 'ClaveGrupoMateria'));

        return redirect()->route('admin.grupos.index')->with('success', 'Asignación creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($profesorId, $grupoMateriaId )
    {
        ProfesorGrupoMateria::where('ClaveProfesor', $profesorId)
            ->where('ClaveGrupoMateria', $grupoMateriaId)
            ->delete();

        return redirect()->route('admin.grupos.index')->with('success', 'Asignación eliminada.');
    }
}
