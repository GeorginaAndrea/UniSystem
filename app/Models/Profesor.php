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
        'Departamento'
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

    public function materias()
    {
        return $this->belongsToMany(Materia::class, 'profesor_materia', 'ClaveProfesor', 'ClaveMateria');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
