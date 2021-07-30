<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EliminarRecursosController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\BuscadorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);

Route::get('/libros', [LibrosController::class, 'libros']);

Route::get('/articulos', [ArticulosController::class, 'articulos']);

Route::get('/articulo/{id}', [HomeController::class, 'articulo']);

Route::post('/buscar-articulos', [BuscadorController::class, 'buscar']);

Route::group(['middleware'=>'auth'], function (){

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin-libros', [DashboardController::class, 'getLibros']);

    Route::get('/admin-articulos', [DashboardController::class, 'getArticulos']);
    
    Route::get('/admin-usuarios', [UsersController::class, 'getUsers']);

    Route::get('/admin-generos', [DashboardController::class, 'getGeneros']);

    Route::delete('/eliminar-libro', [EliminarRecursosController::class, 'eliminarLibro']);

    Route::get('/libros-eliminados', [DashboardController::class, 'librosEliminados']);

    Route::post('/restaurar-libro', [EliminarRecursosController::class, 'restaurarLibro']);

    Route::post('/nuevoLibro', [DashboardController::class, 'nuevoLibro']);

    Route::get('/profile', [UsersController::class, 'profile']);
});

require __DIR__.'/auth.php';
