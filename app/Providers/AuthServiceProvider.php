<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\Grupo;
use App\Policies\GrupoPolicy;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * 
     */
    protected $policies = [
        Grupo::class => GrupoPolicy::class,
    ];
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
