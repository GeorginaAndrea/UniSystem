<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materia';
    protected $fillable = [
        'ClaveMateria',
        'Nombre',
        'Descripcion'
    ];
    public $timestamps = false;

        public function grupoMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'ClaveMateria');
    }

}
