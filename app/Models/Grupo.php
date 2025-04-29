<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupo';
    protected $primaryKey = 'ClaveGrupo';
    public $incrementing = false;
    protected $keyType = 'int';
    protected $fillable = [
        'ClaveGrupo',
        'Nombre',
        'Semestre',
        'ClaveCarrera',
        'ClaveFacultad',
        
    ];
    public $timestamps = false;

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'ClaveCarrera');
    }

    public function facultad()
    {
        return $this->belongsTo(Facultad::class, 'ClaveFacultad');
    }

    public function grupoMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'ClaveGrupo');
    }

}
