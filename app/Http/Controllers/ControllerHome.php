<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index(){
        $dato = 'io sono dato';
        return view('home',
        [ 'dato'=> $dato ]
        );
    }
}
