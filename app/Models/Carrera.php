<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carrera';
    protected $primaryKey = 'ClaveCarrera';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [ 
        'ClaveCarrera',
        'Nombre'
    ];
    

        public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function grupos()
    {
        return $this->hasMany(Grupo::class, 'ClaveCarrera');
    }

    public function alumnos()
    {
        return $this->hasMany(Alumno::class, 'ClaveCarrera');
    }

}
