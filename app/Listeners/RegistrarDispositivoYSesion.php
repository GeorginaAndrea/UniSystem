<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Helpers\NetworkHelper;

class RegistrarDispositivoYSesion
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Login $event): void
    {
        
        $usuarioId = $event->user->id;

        // Obtener información del dispositivo
        $ipLocal = NetworkHelper::getIpLocal();
        $ipGateway = NetworkHelper::getIpGateway();
        $mac = NetworkHelper::getMacAddress();

        $dispositivo = DB::connection('auditoria')->table('dispositivo')
            ->where('usuario_id', $usuarioId)
            ->where('ip_local', $ipLocal)
            ->where('mac_address', $mac)
            ->first();

        if (!$dispositivo) {
            $dispositivoId = DB::connection('auditoria')->table('dispositivo')->insertGetId([
                'usuario_id' => $usuarioId,
                'ip_local' => $ipLocal,
                'ip_gateway' => $ipGateway,
                'mac_address' => $mac,
                'descripcion' => 'Dispositivo detectado automáticamente',
                'fecha_registro' => now(),
            ]);
        } else {
            $dispositivoId = $dispositivo->id;
        }

        DB::connection('auditoria')->table('sesion')->insert([
            'usuario_id' => $usuarioId,
            'dispositivo_id' => $dispositivoId,
            'fecha_login' => now(),
        ]);
        // Buscar si el dispositivo ya está registrado
        // $dispositivo = DB::table('dispositivo')
        //     ->where('usuario_id', $usuarioId)
        //     ->where('ip_local', $ipLocal)
        //     ->where('mac_address', $mac)
        //     ->first();

        // // Si no existe, lo insertamos
        // if (!$dispositivo) {
        //     $dispositivoId = DB::table('dispositivo')->insertGetId([
        //         'usuario_id' => $usuarioId,
        //         'ip_local' => $ipLocal,
        //         'ip_gateway' => $ipGateway,
        //         'mac_address' => $mac,
        //         'descripcion' => 'Dispositivo detectado automáticamente',
        //         'fecha_registro' => now(),
        //     ]);
        // } else {
        //     $dispositivoId = $dispositivo->id;
        // }

        // // Registrar la sesión
        // DB::table('sesion')->insert([
        //     'usuario_id' => $usuarioId,
        //     'dispositivo_id' => $dispositivoId,
        //     'fecha_login' => now(),
        // ]);
    }
}
