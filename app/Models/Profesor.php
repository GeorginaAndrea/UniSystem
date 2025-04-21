<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'ClaveProfesor');
    }

}
