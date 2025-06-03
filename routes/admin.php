<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AlumnoController;
use App\Http\Controllers\Admin\CarreraController;
use App\Http\Controllers\Admin\FacultadController;
use App\Http\Controllers\Admin\GrupoController;
use App\Http\Controllers\Admin\GrupoMateriaController;
use App\Http\Controllers\Admin\KardexController;
use App\Http\Controllers\Admin\ProfesorController;
use App\Http\Controllers\Admin\MateriaController;
use App\Http\Controllers\Admin\ProfesorGrupoMateriaController;

    Route::get('/',[HomeController::class, 'index'])->name('admin.home');

    //Rutas facultades
    Route::resource('facultades', FacultadController::class)
        ->names('admin.facultades')
        ->parameters(['facultades' => 'facultad']);

    //Rutas Carreras
    Route::resource('carreras', CarreraController::class)
        ->names('admin.carreras')
        ->parameters(['carreras' => 'carrera']);

    //Rutas Alumnos
    Route::resource('alumnos', AlumnoController::class)
        ->names('admin.alumnos')
        ->parameters(['alumnos' => 'alumno']);

    //Rutas Profesores
    Route::resource('profesores', ProfesorController::class)
        ->names('admin.profesores')
        ->parameters(['profesores' => 'profesor']);

    //Rutas Materias
    Route::resource('materias', MateriaController::class)
        ->names('admin.materias')
        ->parameters(['materias' => 'materia']);

    //Rutas Grupos
    Route::resource('grupos', GrupoController::class)
        ->names('admin.grupos')
        ->parameters(['grupos' => 'grupo']);

    //Rutas Grupos Materias
    Route::resource('gruposmaterias', GrupoMateriaController::class)
        ->names('admin.gruposmaterias')
        ->parameters(['gruposmaterias' => 'grupomateria']);

    //Rutas Kardexs
    Route::resource('kardexs', KardexController::class)
        ->names('admin.kardexs')
        ->parameters(['kardex' => 'kardex']);

     Route::get('grupos/{grupo}/gruposmaterias/create', [GrupoMateriaController::class, 'create'])
        ->name('admin.gruposmaterias.create');
    

    Route::get('admin/grupos/{grupo}/profesores', [ProfesorGrupoMateriaController::class, 'index'])->name('admin.profesorgrupomateria.index');
    Route::post('admin/grupos/{grupo}/profesores', [ProfesorGrupoMateriaController::class, 'store'])->name('admin.profesorgrupomateria.store');
