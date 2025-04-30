<?php

namespace App\Models\Audit;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $connection = 'auditoria'; 
    protected $table = 'dispositivo';
    public $timestamps = false;

    public $incrementing = true;
    public $fillable = [
        'usuario_id',
        'ip_local',
        'ip_gateway',
        'mac_address',
        'descripcion',
        'fecha_registro'

    ];
}
