<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kardex extends Model
{
    use HasFactory;

    protected $table = 'kardex';
    protected $keyType = 'int';
    protected $primaryKey = 'ClaveKardex';
    public $incrementing = true;
    protected $fillable = [
        'ClaveGrupoMateria',
        'ClaveAlumno',
        'Calificacion',
        
    ];
    // public $incrementing = false;
    

    public function grupoMateria()
    {
        return $this->belongsTo(GrupoMateria::class, 'ClaveGrupoMateria');
    }

    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'ClaveAlumno');
    }

    
}
