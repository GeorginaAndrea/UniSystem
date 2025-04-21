<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    public function grupoMateria()
    {
        return $this->belongsTo(GrupoMateria::class, 'ClaveGrupoMateria');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'ClaveAlumno');
    }

}
