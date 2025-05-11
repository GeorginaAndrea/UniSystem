<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumno';
    protected $keyType = 'string';
    protected $primaryKey = 'ClaveAlumno';
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
        'FechaNacimiento',
        'FechaIngreso',
        
        'ClaveCarrera',
        'user_id'
    ];
    public $incrementing = false;
    

    // public function facultad()
    // {
    //     return $this->belongsTo(Facultad::class, 'ClaveFacultad','ClaveFacultad' );
    // }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'ClaveCarrera', 'ClaveCarrera');
    }

    public function kardex()
    {
        return $this->hasMany(Kardex::class, 'ClaveAlumno','ClaveAlumno');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kardexPorGrupoMateria($claveGrupoMateria)
    {
        return $this->kardex->where('ClaveGrupoMateria', $claveGrupoMateria)->first();
    }


}
