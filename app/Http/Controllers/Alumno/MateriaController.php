<?php

namespace App\Http\Controllers\Alumno;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\GrupoMateria;
use App\Models\Kardex;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MateriaController extends Controller
{
    use AuthorizesRequests;

    public function index() {
        $alumnoId = Auth::user()->alumno->ClaveAlumno;   

        $relaciones = Kardex::with('grupoMateria.materia')
        ->where('ClaveAlumno', $alumnoId)
        ->get();

        $gruposMaterias = GrupoMateria::orderBy('Nombre', 'asc');
        return view('alumno.materias.index', compact('relaciones', 'gruposMaterias'));
    }
    
    
}
