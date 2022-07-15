<?php

use Illuminate\Support\Facades\Route;


// Ruta para el Front de Perfuventas Guatemala
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');

// Rutas para todas las fragancias
Route::get('/fragancias', [App\Http\Controllers\FrontController::class, 'fragancias'])->name('fragancias');

// Ruta para quien somos
Route::get('/quiensomosfront', [App\Http\Controllers\FrontController::class, 'quiensomos'])->name('quiensomosfront');

// Ruta para contacto
Route::get('/contacto', [App\Http\Controllers\FrontController::class, 'contacto'])->name('contacto');


// Rutas del registro y login
Auth::routes();

// Ruta para Administracion de PerfuventasGuatemala
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth','verified']], function() {


// Rutas para el CRUD  de perfumes
    Route::get('/perfume', [App\Http\Controllers\PerfumeController::class, 'index'])->name('perfume.index');

    Route::get('/perfume/create', [App\Http\Controllers\PerfumeController::class, 'create'])->name('perfume.create');

    Route::post('/perfume', [App\Http\Controllers\PerfumeController::class, 'store'])->name('perfume.store');

    Route::get('/perfume/{perfume}/edit', [App\Http\Controllers\PerfumeController::class, 'edit'])->name('perfume.edit');

    Route::put('/perfume/{perfume}',[App\Http\Controllers\PerfumeController::class, 'update'])->name('perfume.update');

    Route::delete('/perfume/{perfume}',[App\Http\Controllers\PerfumeController::class, 'destroy'])->name('perfume.delete');


// Ruta para el CRUD de quien somos
   Route::get('/quiensomos', [App\Http\Controllers\QuiensomosController::class, 'index'])->name('quiensomos.index');

   Route::get('/quiensomos/create', [App\Http\Controllers\QuiensomosController::class, 'create'])->name('quiensomos.create');

   Route::post('/quiensomos', [App\Http\Controllers\QuiensomosController::class, 'store'])->name('quiensomos.store');

   Route::get('/quiensomos/{quiensomos}/edit', [App\Http\Controllers\QuiensomosController::class, 'edit'])->name('quiensomos.edit');

   
   Route::put('/quiensomos/{quiensomos}',[App\Http\Controllers\QuiensomosController::class, 'update'])->name('quiensomos.update');

   Route::delete('/quiensomos/{quiensomos}',[App\Http\Controllers\QuiensomosController::class, 'destroy'])->name('quiensomos.delete');

});