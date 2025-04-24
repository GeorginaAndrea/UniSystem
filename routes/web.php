<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// en routes/web.php
Route::get('/prueba', function () {
    return view('welcome');
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
