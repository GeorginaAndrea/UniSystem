<?php

namespace App\Http\Controllers\Profesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProfesorGrupoMateria;
use App\Models\Grupo;
use App\Models\GrupoMateria;
use App\Models\Alumno;
use App\Policies\GrupoPolicy;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GrupoController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesorId = Auth::user()->profesor->ClaveProfesor;

    // Obtener los grupos únicos donde imparte materias
         $relaciones = ProfesorGrupoMateria::with('grupoMateria.grupo', 'grupoMateria.materia')
        ->where('ClaveProfesor', $profesorId)
        ->get();
        return view('profesor.grupos.index', compact('relaciones'));
    }


    public function verAlumnos($grupoId)
    {

        $profesorId = Auth::user()->profesor->ClaveProfesor;

        // Verificamos si este profesor tiene al menos una asignación con el grupo dado
        $tieneAcceso = ProfesorGrupoMateria::where('ClaveProfesor', $profesorId)
            ->whereHas('grupoMateria', function ($query) use ($grupoId) {
                $query->where('ClaveGrupo', $grupoId);
            })->exists();

        if (!$tieneAcceso) {
            abort(403, 'No tienes permiso para ver los alumnos de este grupo.');
        }

        $grupo = Grupo::with('grupoMaterias.kardex.alumno')->findOrFail($grupoId);

        // Obtener alumnos desde el kardex de cada grupo_materia
        $alumnos = $grupo->grupoMaterias->flatMap(function ($gm) {
            return $gm->kardex->pluck('alumno');
        })->unique('ClaveAlumno')->values();

        return view('profesor.grupos.alumnos', compact('grupo', 'alumnos'));
    }


        public function alumnos($claveGrupoMateria)
    {
        $grupoMateria = GrupoMateria::with('grupo', 'materia')->findOrFail($claveGrupoMateria);

       $alumnos = Alumno::whereHas('kardex', function ($query) use ($claveGrupoMateria) {
            $query->where('ClaveGrupoMateria', $claveGrupoMateria);
        })->with([
            'carrera',
            'kardex' => function ($query) use ($claveGrupoMateria) {
                $query->where('ClaveGrupoMateria', $claveGrupoMateria);
            }
        ])->get();

        return view('profesor.grupos.alumnos', compact('grupoMateria', 'alumnos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
