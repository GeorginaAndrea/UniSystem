<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Alumno\HomeController;
use App\Http\Controllers\Alumno\KardexController;
use App\Http\Controllers\Alumno\MateriaController;

    Route::get('/', [HomeController::class],'index')->name('alumno.home');

    Route::resource('kardex', KardexController::class)
        ->names('alumno.kardex')
        ->parameters(['kardexs' => 'kardex']);

    Route::resource('materias', MateriaController::class)
        ->names('alumno.materias')
        ->parameters(['materias' => 'materia']);