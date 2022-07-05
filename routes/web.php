<?php

use Illuminate\Support\Facades\Route;


// Ruta para el Front de Perfuventas Guatemala
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('front');

Auth::routes();

// Ruta para Administracion de PerfuventasGuatemala
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Ruta para el CRUD de perfumes
Route::get('/perfume', [App\Http\Controllers\PerfumeController::class, 'index'])->name('perfume.index');

Route::get('/perfume/create', [App\Http\Controllers\PerfumeController::class, 'create'])->name('perfume.create');

Route::post('/perfume', [App\Http\Controllers\PerfumeController::class, 'store'])->name('perfume.store');

// Route::get('/perfume/{perfume}/edit', [App\Http\Controllers\PerfumeController::class, 'edit'])->name('perfume.edit');

// Route::put('/perfume/{perfume}',[App\Http\Controllers\PerfumeController::class, 'update'])->name('perfume.update');

// Route::delete('/perfume/{perfume}',[App\Http\Controllers\PerfumeController::class, 'destroy'])->name('perfume.delete');


