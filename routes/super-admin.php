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

    Route::get('/',[HomeController::class, 'index'])->name('admin.home');