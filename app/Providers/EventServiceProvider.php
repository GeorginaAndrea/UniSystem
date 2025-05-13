<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\RegistrarDispositivoYSesion;
use App\Listeners\ActualizarSesionLogout;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            RegistrarDispositivoYSesion::class,
        ],
        Logout::class => [
            ActualizarSesionLogout::class,
        ],
    ];

    public function boot(): void
    {
        //
    }
}
