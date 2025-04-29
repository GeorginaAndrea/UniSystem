<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use App\Models\GrupoMateria;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index() {
        $gruposMaterias = GrupoMateria::orderBy('Nombre', 'asc');
        return view('alumno.materias.index');
    }
    
}
