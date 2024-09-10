<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

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
Route::get('/mostrarTodo',[HomeController::class,"mostrarTodo"]);
Route::get('/ayuda', [HomeController::class,"index"]);
Route::get('/inicio', HomeController::class);

Route::get('/post',[PostController::class,"index"]);

Route::get('/users/{id}/{id2}',[HomeController::class,"saludar"]);

Route::get('/mostrar/{id}',[HomeController::class,"mostra"]);
Route::get('/crear',[HomeController::class,"crear"]);
Route::put('/mostrar/actualizar',[HomeController::class,"update"])->name("mostrar.actualizar");
Route::post('/crear',[HomeController::class,"agregar"]);
Route::delete("/mostrarTodo/{id}",[HomeController::class,"eliminar"]);

// Route::get('users/{id}/{id2?}', function ($id,$id2 = null) {
//     if ($id2) {
//         return "Hola $id y $id2"; 
//     }
//         return "Hola $id "; 
// });
