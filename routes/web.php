<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriaController;

Route::redirect('/', '/libros');

// Rutas de libros
Route::get('/libros', [LibroController::class, 'index'])
    ->name('libros.index');

Route::get('/libros/crear', [LibroController::class, 'create'])
    ->name('libros.create');

Route::post('/libros', [LibroController::class, 'store'])
    ->name('libros.store');

Route::get('/libros/{libro}/editar', [LibroController::class, 'edit'])
    ->name('libros.edit');

Route::put('/libros/{libro}', [LibroController::class, 'update'])
    ->name('libros.update');

Route::delete('/libros/{libro}', [LibroController::class, 'destroy'])
    ->name('libros.destroy');

// Rutas de categorías
Route::get('/categorias', [CategoriaController::class, 'index'])
    ->name('categorias.index');

Route::get('/categorias/crear', [CategoriaController::class, 'create'])
    ->name('categorias.create');

Route::post('/categorias', [CategoriaController::class, 'store'])
    ->name('categorias.store');

Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])
    ->name('categorias.destroy');
