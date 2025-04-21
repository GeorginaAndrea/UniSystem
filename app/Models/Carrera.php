<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
        public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'ClaveCarrera');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'ClaveCarrera');
    }

}
