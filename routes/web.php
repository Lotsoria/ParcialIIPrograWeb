<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('personas',\App\Http\Controllers\PersonaController::class);
Route::resource('marcas',\App\Http\Controllers\MarcaController::class);
Route::resource('dosis',\App\Http\Controllers\DosiController::class);
Route::resource('aplicacion-vacunas',\App\Http\Controllers\AplicacionVacunaController::class);
