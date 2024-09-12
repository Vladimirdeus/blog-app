<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index($dato1,$dato2) {

        return view("home.home",["dato" => $dato1, "dato2"=> $dato2]);
        
    }
}
