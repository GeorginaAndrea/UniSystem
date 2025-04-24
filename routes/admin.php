<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AlumnoController;
use App\Http\Controllers\Admin\CarreraController;
use App\Http\Controllers\Admin\FacultadController;
use App\Http\Controllers\Admin\GrupoController;
use App\Http\Controllers\Admin\ProfesorController;
use App\Http\Controllers\Admin\MateriaController;
use App\Models\Profesor;

    Route::get('/',[HomeController::class, 'index'])->name('admin.home');


    Route::resource('facultades', FacultadController::class)->names('admin.facultades');
    Route::resource('carreras', CarreraController::class)->names('admin.carreras');
    Route::resource('alumnos', AlumnoController::class)->names('admin.alumnos');
    Route::resource('profesores', ProfesorController::class)->names('admin.profesores');
    Route::resource('materias', MateriaController::class)->names('admin.materias');
    Route::resource('grupos', GrupoController::class)->names('admin.grupos');
// Route::get('/',function(){
//     return "cdcsdhlshd";
// });