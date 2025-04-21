<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'ClaveCarrera');
    }

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'ClaveProfesor');
    }

    public function grupoMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'ClaveGrupo');
    }

}
