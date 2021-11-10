<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/crearServicio', [App\Http\Controllers\HomeController::class, 'crear'])->name('crearServicio');
//Route::get('/eliminarServicio', [App\Http\Controllers\HomeController::class, 'eliminar'])->name('eliminarServicio');
//Route::get('/modificarServicio', [App\Http\Controllers\HomeController::class, 'modificar'])->name('modificarServicio');
Route::get('/verServicio', [App\Http\Controllers\HomeController::class, 'ver'])->name('verServicio');

Auth::routes();

