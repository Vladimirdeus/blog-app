<?php

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

 

Route::get('users/{id}/{id2?}', function ($id,$id2 = null) {
    if ($id2) {
        return "Hola $id y $id2"; 
    }
        return "Hola $id "; 
});
