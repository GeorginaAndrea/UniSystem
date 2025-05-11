<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user(); // <-- este es el cambio clave

        if (!$user) {
            return redirect()->route('login');
        }

        if ($user->hasRole('super-admin')) {
            return redirect()->route('super-admin.home');
        }

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.home');
        }

        if ($user->hasRole('alumno')) {
            return redirect()->route('alumno.home');
        }

        if ($user->hasRole('profesor')) {
            return redirect()->route('profesor.home');
        }

        return redirect()->intended(config('fortify.home'));
    }
}
