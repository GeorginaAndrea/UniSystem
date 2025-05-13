<?php

use App\Http\Controllers\SuperAdmin\HomeController;
use App\Http\Controllers\SuperAdmin\LogCambios;
// use App\Models\Audit\LogCambio;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SuperAdmin\Auditoria\HistorialController;
use App\Http\Controllers\SuperAdmin\Dispositivos;
use App\Http\Controllers\SuperAdmin\Sesiones;
use App\Http\Controllers\SuperAdmin\UserController;
use App\Models\User;

Route::get('/',[HomeController::class, 'index'])->name('super-admin.home');

Route::prefix('auditoria/historial')->name('super-admin.auditoria.historial.')->group(function(){
    Route::get('/',[LogCambios::class, 'index'])->name('index');
    Route::get('{id}',[LogCambios::class, 'show'])->name('show');
});

Route::prefix('auditoria/dipositivos')->name('super-admin.auditoria.dispositivos.')->group(function(){
    Route::get('/',[Dispositivos::class , 'index'])->name('index');
    Route::get('{id}',[Dispositivos::class, 'show'])->name('show');

});

Route::prefix('auditoria/sesiones')->name('super-admin.auditoria.sesiones.')->group(function(){
    Route::get('/',[Sesiones::class , 'index'])->name('index');
    Route::get('{id}',[Sesiones::class , 'show'])->name('show');
});

Route::resource('users', UserController::class)->names('super-admin.users');
// Route::resource('auditoria', LogCambios::class)
//     ->names('super-admin.auditoria')
//     ->parameters(['auditoria' => 'auditoria']);
   

    