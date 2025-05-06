<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfesorGrupoMateria extends Model
{
    use HasFactory;
    protected $table = 'profesor_grupomateria';

    public $fillable = [
        'ClaveProfesor',
        'ClaveGrupoMateria'
    ];
    
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'ClaveProfesor', 'ClaveProfesor');
    }

    public function grupoMateria()
    {
        return $this->belongsTo(GrupoMateria::class, 'ClaveGrupoMateria', 'ClaveGrupoMateria');
    }

}
