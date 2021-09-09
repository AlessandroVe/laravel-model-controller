<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerHome extends Controller
{
    public function index(){
        $dato = 'io sono dato';
        $dato1 = 'ciao';
        $dato2 = 'ok';
        
        return view('home',dump(compact('dato', 'dato1','dato2')));
    }
}
