<?php

namespace App\Models\Audit;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Sesion extends Model
{
    protected $connection = 'auditoria'; 
    protected $table = 'sesion';
    public $timestamps = false;

    public $incrementing = true;

    public $fillable = [
        'usuario_id',
        'dispositivo_id',
        'fecha_login',
        'fecha_logout',
    ];
    public function usuario()
    {
        return (new User)->setConnection('mysql')->belongsTo(User::class, 'usuario_id');
    }

    public function dispositivo()
    {
        return $this->belongsTo(Dispositivo::class, 'dispositivo_id');
    }
}
