<?php

namespace App\Models\Audit;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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

     public function usuario()
    {
        return (new User)->setConnection('mysql')->belongsTo(User::class, 'usuario_id');
    }
}
