<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumno';
    protected $fillable = [
        'ClaveAlumno',
        'ApePaterno',
        'ApeMaterno',
        'Nombres',
        'Curp',
        'Genero',
        'EstCivil',
        'Estado',
        'Municipio',
        'Colonia',
        'Direccion',
        'Telefono',
        'Celular',
        'Email',
        'FechaNacimiento'
    ];
    public $incrementing = false;
    protected $keyType = 'string';

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'ClaveCarrera');
    }

    public function kardex()
    {
        return $this->hasMany(Kardex::class, 'ClaveAlumno');
    }

}
