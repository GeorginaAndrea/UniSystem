<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    protected $table = 'profesor';
    protected $keyType = 'string';
    protected $primaryKey = 'ClaveProfesor';
    protected $fillable = [
        'ClaveProfesor',
        'ApePaterno',
        'ApeMaterno',
        'Nombres',
        'Email',
        'Telefono',
        'ClaveFacultad',
        'Departamento',
        'user_id'
    ];
    public $incrementing = false;
    

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'ClaveProfesor');
    }

    public function grupoMaterias()
    {
        return $this->belongsToMany(GrupoMateria::class, 'profesor_grupomateria', 'ClaveProfesor', 'ClaveGrupoMateria');
    }

    public function materias()
    {
        return $this->grupoMaterias->map(function ($grupoMateria) {
            return $grupoMateria->materia;
        });
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }



}
