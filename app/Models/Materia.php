<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $table = 'materia';
    protected $primaryKey = 'ClaveMateria';
    protected $keyType = 'int';
    public $incrementing = true;
    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Semestre',
        'ClaveCarrera'
    ];
    

        public function grupoMaterias()
    {
        return $this->hasMany(GrupoMateria::class, 'ClaveMateria', 'ClaveMateria');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'ClaveCarrera', 'ClaveCarrera');
    }
    
}
