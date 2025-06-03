<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ForcePasswordChange
{
    public function handle(Request $request, Closure $next)
    {
        // Asegúrate de que el usuario esté autenticado
        $user = Auth::user();

        if ($user) {
            // Si nunca ha cambiado su contraseña o han pasado más de 90 días
            $lastChanged = $user->password_changed_at;

            if (is_null($lastChanged) || Carbon::parse($lastChanged)->diffInDays(now()) >= 90) {
                // Evita bucle infinito si ya está en la ruta de cambio de contraseña
                if (!$request->is('user/force-password-change')) {
                    return redirect()->route('password.force');
                }
            }
        }

        return $next($request);
    }
}
