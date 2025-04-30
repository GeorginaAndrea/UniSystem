<?php

namespace App\Models\Audit;

use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
    protected $connection = 'auditoria'; 
    protected $table = 'dispositivo';
    public $timestamps = false;

    public $incrementing = true;

    public $fillable = [
        'usuario_id',
        'dispositivo_id',
        'fecha_login',
        'fecha_logout',
    ];
}
