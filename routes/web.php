<?php

use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/ayuda', function () {
    return "hola prro";
});

Route::get("hola/{id}/{id2}",[HomeController::class,"index"]);
 
Route::get('prueba', function () {
    $post = Post::create(['titulo' => 'DesdeASDASDASDdasdASD', 'contenido' => 'Desde modelo 2']);

    return $post;
    
});
Route::get('prueba2/{id}', function ($id) {
    $post = Post::find($id);
    return $post;
    
});
Route::get('prueba3/{id}', function ($id) {
    $post = Post::find($id);
    $post->update(["contenido"=>"Vladimir"]);
    return $post;
    
});
Route::get('prueba4', function ( ) {
    $modelos = Post::all();
    return $modelos;
    
});
 