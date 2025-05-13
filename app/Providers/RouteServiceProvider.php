<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Spatie\Permission\Middlewares\RoleMiddleware;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/';

    public function boot(): void
    {
        $this->routes(function () {
            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web', 'auth')
                ->prefix('admin')
                ->group(base_path('routes/admin.php'));

            Route::middleware('web','auth')
                ->prefix('super-admin')
                ->group(base_path('routes/super-admin.php'));

            Route::middleware('web','auth')
                ->prefix('alumno')
                ->group(base_path('routes/alumno.php'));


            Route::middleware(['web', 'auth', 'role:profesor'])
            ->prefix('profesor')
            ->name('profesor.')
            ->group(base_path('routes/profesor.php'));

            
        });
    }
}
