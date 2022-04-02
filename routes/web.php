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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('veterinarios', App\Http\Controllers\VeterinarioController::class);
Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('agendas', App\Http\Controllers\AgendaController::class);
Route::resource('citas', App\Http\Controllers\CitaController::class);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
