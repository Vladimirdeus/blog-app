<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view('welcome');
        
    }
    function saludar($id,$id2) {
        if ($id2) {
            return "Hola $id y $id2"; 
        }
            return "Hola $id "; 
        
    }
    function __invoke(){
        return view('inicio');
    }
    function mostrarTodo( ) {
     
        $post = User::all(); 
        return view("post.saludo",['post' =>$post]);
        
    }

    function mostra($value) {
        $post = User::find($value);
        return view("post.mostra",['value'=>$post]);

        
    }
    function crear() {
        
        return view("post.crear");
        
    }
    function agregar(Request $request) {
 
        User::create(['name' => $request->name, 'email' => $request->email, 'password' => bcrypt($request->password)]);

        return redirect("mostrarTodo");
    }
    function actualizar(Request $request) {
        $model = User::find($request->id);
        $model->update(['name' => $request->name,'email' => $request->email, 'password' => bcrypt($request->password)]);
         return redirect("mostrarTodo");
        
    }
    
        
}
