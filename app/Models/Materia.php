<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
        public function grupoMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'ClaveMateria');
    }

}
