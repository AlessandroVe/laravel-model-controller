<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\movie;

class ControllerHome extends Controller
{
    public function index(){
         
        $all_Movies = movie::all();
        return view('home', compact('all_Movies'));
    }
}
