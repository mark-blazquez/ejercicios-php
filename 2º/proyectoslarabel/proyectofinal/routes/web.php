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


//vista index
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
//vista de productos
Route::get('/productos', [App\Http\Controllers\HomeController::class, 'productos'])->name('productos');
//vista de donacion 
Route::get('/donacion', [App\Http\Controllers\HomeController::class, 'donacion'])->name('donacion');
//vista de productos
Route::get('/peticion', [App\Http\Controllers\HomeController::class, 'peticion'])->name('peticion');
//vista administrador
Route::get('/administrador', [App\Http\Controllers\ProductosContoller::class, 'index'])->name('administrador');
//vista añadir
Route::get('/administrador/create', [App\Http\Controllers\ProductosContoller::class, 'create'])->name('create');

//vista modificar
Route::post('/administrador/update', [App\Http\Controllers\ProductosContoller::class, 'mostrarupdate'])->name('update');

//añadir funcion
Route::post('/administrador', [App\Http\Controllers\ProductosContoller::class, 'store']);
//eliminar funcion
Route::delete('/administrador', [App\Http\Controllers\ProductosContoller::class, 'destroy']);
//modificar funcion
Route::patch('/administrador', [App\Http\Controllers\ProductosContoller::class, 'update']);



Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/home',function(){
		$user=auth::user();
		if($user->esAdmin()){
			return view("home");
		}else{
			return view("index");
		}
	}
);
