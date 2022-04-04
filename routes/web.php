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

Route::resource('/', App\Http\Controllers\HomeController::class)->middleware('auth');

Auth::routes();

Route::resource('veterinarios', App\Http\Controllers\VeterinarioController::class)->middleware('auth');
Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');
Route::resource('agendas', App\Http\Controllers\AgendaController::class)->middleware('auth');
Route::resource('citas', App\Http\Controllers\CitaController::class)->middleware('auth');
Route::post('/citas/{id}/cancelar', 'CitaController@cancel')->middleware('auth');


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
