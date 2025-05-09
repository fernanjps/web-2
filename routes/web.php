<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResenaController;

use App\Http\Controllers\VideojuegoController;

Route::get('/videojuegos/populares', [VideojuegoController::class, 'populares'])->name('videojuegos.populares');

Route::get('/reseñas', [ResenaController::class, 'index'])->name('reseñas.index');
Route::get('/reseñas/{id}', [ResenaController::class, 'show'])->name('reseñas.show');


Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

