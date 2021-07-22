<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EliminarRecursosController;

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

Route::group(['Middleware'=>'auth'], function (){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/admin-libros', [DashboardController::class, 'getLibros']);

    Route::get('/admin-articulos', [DashboardController::class, 'getArticulos']);

    Route::delete('/eliminar-libro', [EliminarRecursosController::class, 'eliminarLibro']);

    Route::get('/libros-eliminados', [DashboardController::class, 'librosEliminados']);

    Route::post('/restaurar-libro', [EliminarRecursosController::class, 'restaurarLibro']);
});

require __DIR__.'/auth.php';
