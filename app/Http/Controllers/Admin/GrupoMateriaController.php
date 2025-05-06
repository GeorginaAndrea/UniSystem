<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GrupoMateria;
use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Grupo;

class GrupoMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gruposmaterias = GrupoMateria::orderBy('ClaveGrupoMateria','asc');
        return view('admin.gruposmaterias.index', compact('gruposmaterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Grupo $grupo)
    {
        $materias = Materia::where('Semestre', $grupo->Semestre)
            ->where('ClaveCarrera', $grupo->ClaveCarrera)
           ->get();

    return view('admin.gruposmaterias.create', compact('grupo', 'materias'));
        // $materias = Materia::all();
        // return view('admin.gruposmaterias.create', compact('grupo', 'materias'));
        // //return view('admin.gruposmaterias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $grupo)
    {
        foreach ($request->materias as $materia) {
            GrupoMateria::create([
                'ClaveGrupo' => $grupo,
                'ClaveMateria' => $materia['ClaveMateria'],
                'CupoMaximo' => $materia['CupoMaximo'],
                'FechaInicio' => $materia['FechaInicio'],
                'FechaFin' => $materia['FechaFin'],
            ]);
        }
    
        return redirect()->route('admin.profesorgruposmateria.index', $grupo);
    }

    /**
     * Display the specified resource.
     */
    public function show(GrupoMateria $grupo_materia)
    {
        return view('admin.gruposmaterias.show', compact('grupo_materia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GrupoMateria $grupo_materia)
    {
        return view('admin.gruposmaterias.edit', compact('grupo_materia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GrupoMateria $grupo_materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GrupoMateria $grupo_materia)
    {
        //
    }
}
