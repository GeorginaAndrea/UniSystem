<?php

use App\Http\Controllers\Profesor\AlumnoController;
use App\Http\Controllers\Profesor\GrupoController;
use App\Http\Controllers\Profesor\HomeController;
use App\Http\Controllers\Profesor\MateriaController;
use Illuminate\Support\Facades\Route;


    Route::get('/',[HomeController::class, 'index'])->name('home');

    Route::get('/dashboard', function () {
    return 'Bienvenido, profesor';
    })->name('home');

    Route::resource('alumnos', 
    AlumnoController::class)
        ->names('alumnos')
        ->parameters(['alumnos' => 'alumno']);

    // Route::resource('grupos', 
    // AlumnoController::class)
    //     ->names('grupos')
    //     ->parameters(['grupos' => 'grupo']);

    Route::resource('grupos', GrupoController::class)
        ->names('grupos')
        ->parameters(['grupos' => 'grupo']);

    Route::get('grupos/{grupo}/alumnos', [GrupoController::class, 'verAlumnos'])
    ->name('grupos.alumnos');

    Route::resource('materias', MateriaController::class)
        ->names('materias')
        ->parameters(['materias' => 'materia']);