<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoMateria extends Model
{
    use HasFactory;

    protected $table = 'GrupoMateria';
    protected $fillable = [
        'ClaveGrupoMateria',
        'ClaveGrupo',
        'ClaveMateria',
        'Periodo'
    ];
    public $timestamps = false;

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'ClaveGrupo');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'ClaveMateria');
    }

    public function kardex()
    {
        return $this->hasMany(Kardex::class, 'ClaveGrupoMateria');
    }

}
