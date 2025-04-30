<?php

namespace App\Models\Audit;

use Illuminate\Database\Eloquent\Model;

class LogCambio extends Model
{
    protected $connection = 'auditoria'; 
    protected $table = 'log_cambios';
    public $timestamps = false;
    public $incrementing = true;


    public $fillable = [
        'usuario_id',
        'tabla_afectada',
        'tipo_cambio',
        'llave_primaria',
        'datos_anteriores',
        'datos_nuevos',
        'ip_local',
        'ip_gateway',
        'mac_address',
        'fecha'
    ];
}
