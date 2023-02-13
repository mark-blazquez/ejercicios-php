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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('indexmb');
Route::get('/proyectos', [App\Http\Controllers\mbcontroladorinicio::class, 'index'])->name('proyectosmb');
Route::get('/tareas', [App\Http\Controllers\mbcontroladorfinal::class, 'index'])->name('tareasmb');
Route::get('/create', [App\Http\Controllers\mbcontroladorinicio::class, 'create'])->name('createmb');
Route::post('/proyectos', [App\Http\Controllers\mbcontroladorinicio::class, 'store']);
Route::delete('/proyectos', [App\Http\Controllers\mbcontroladorinicio::class, 'destroy']);

