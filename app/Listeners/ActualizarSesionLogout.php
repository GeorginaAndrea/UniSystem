<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class ActualizarSesionLogout
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
    public function handle(Logout $event): void
    {
        $usuarioId = $event->user->id;

        // Usamos la conexión 'auditoria'
        $sesion = DB::connection('auditoria')->table('sesion')
            ->where('usuario_id', $usuarioId)
            ->whereNull('fecha_logout')
            ->orderByDesc('fecha_login')
            ->first();

        if ($sesion) {
            DB::connection('auditoria')->table('sesion')
                ->where('id', $sesion->id)
                ->update(['fecha_logout' => now()]);
        }
    }
}
