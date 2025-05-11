<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupo';
    protected $primaryKey = 'ClaveGrupo';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = [
        'Nombre',
        'Semestre',
        'ClaveCarrera',
        'ClaveFacultad',
        
    ];
    

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'ClaveCarrera', 'ClaveCarrera');
    }

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad', 'ClaveFacultad');
    }

    public function grupoMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'ClaveGrupo');
    }

}
