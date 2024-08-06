<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Consultar de la DB
Route::get('/home', [TodoController::class, 'index'])->name('ToDo.index');

// Ruta de Crear
Route::post('/home', [TodoController::class, 'create'])->name('ToDo.create');

// Ruta de Modificar
Route::post('/modificar/{id}', [TodoController::class, 'update'])->name('ToDo.update');

// Ruta de Eliminar
Route::get('/eliminar/{id}', [TodoController::class, 'delete'])->name('ToDo.delete');

// Ruta para marcar como completada
Route::get('/completar/{id}', [TodoController::class, 'filled'])->name('ToDo.filled');
