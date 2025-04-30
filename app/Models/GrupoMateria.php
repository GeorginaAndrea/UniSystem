<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoMateria extends Model
{
    use HasFactory;

    protected $table = 'grupomateria';
    protected $primaryKey = 'ClaveGrupoMateria';
    public $incrementing = true;
    protected $fillable = [
        'ClaveGrupo',
        'ClaveMateria',
        'Periodo',
        'ClaveProfesor'
    ];
    

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'ClaveGrupo');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'ClaveMateria');
    }
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'ClaveProfesor'); // nueva relación
    }

    public function kardex()
    {
        return $this->hasMany(Kardex::class, 'ClaveGrupoMateria');
    }

}
