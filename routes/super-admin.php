<?php

use App\Http\Controllers\SuperAdmin\HomeController;
use App\Http\Controllers\SuperAdmin\LogCambios;
// use App\Models\Audit\LogCambio;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SuperAdmin\Auditoria\HistorialController;

Route::prefix('auditoria/historial')->name('super-admin.auditoria.historial.')->group(function(){
    Route::get('/',[LogCambios::class, 'index'])->name('index');
    Route::get('{id}',[LogCambios::class, 'show'])->name('show');
});
// Route::resource('auditoria', LogCambios::class)
//     ->names('super-admin.auditoria')
//     ->parameters(['auditoria' => 'auditoria']);
   

    