<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificacion';
    protected $primaryKey = 'ClaveCalificacion';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = [
        'Calificacion',
        'Faltas'
    ];

    
}
