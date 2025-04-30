<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

     // Si no es autoincremental
    // protected $keyType = 'string';
    protected $table = 'facultad';
    protected $primaryKey = 'ClaveFacultad';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'ClaveFacultad',
        'NombreFacultad',
        'Direccion'
    ];

    

        public function carreras()
    {
        return $this->hasMany(Carrera::class, 'ClaveFacultad');
    }

    public function profesores()
    {
        return $this->hasMany(Profesor::class, 'ClaveFacultad');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'ClaveFacultad');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'ClaveFacultad');
    }

}
