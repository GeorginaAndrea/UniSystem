<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    use HasFactory;

    protected $table = 'kardex';
    protected $fillable = [
        'ClaveKardex',
        'ClaveGrupoMateria',
        'ClaveAlumno',
        'Semestre',
        'Calificacion'
    ];
    public $timestamps = false;

    public function grupoMateria()
    {
        return $this->belongsTo(GrupoMateria::class, 'ClaveGrupoMateria');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'ClaveAlumno');
    }

}
