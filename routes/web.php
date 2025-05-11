<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('welcome');
});

// en routes/web.php
Route::get('/prueba', function () {
    return view('welcome');
});



Route::get('/test-auditoria-db', function () {
    try {
        $result = DB::connection('auditoria')->select('SELECT 1 as test');
        return response()->json(['success' => true, 'result' => $result]);
    } catch (\Exception $e) {
        return response()->json(['success' => false, 'error' => $e->getMessage()]);
    }
});

Route::middleware(['role:profesor'])->get('/test-role', function () {
    return 'Middleware role funcionando correctamente';
});


Route::get('/home-page', function () {
    return view('home-page');
})->name('home-page');
// Route::get('/home-page',function () {
//     return view('home-page');
// })->name('home-page');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/pp', function () {
        return view('dashboard');
    });

    

  
});
