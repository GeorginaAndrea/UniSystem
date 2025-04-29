<?php

use App\Http\Controllers\Profesor\AlumnoController;
use App\Http\Controllers\Profesor\HomeController;
use App\Http\Controllers\Profesor\MateriaController;
use Illuminate\Support\Facades\Route;


    Route::get('/',[HomeController::class, 'index'])->name('profesor.home');

    Route::resource('alumnos', 
    AlumnoController::class)
        ->names('profesor.alumnos')
        ->parameters(['alumnos' => 'alumno']);

    Route::resource('materias', MateriaController::class)
        ->names('profesor.materias')
        ->parameters(['materias' => 'materia']);