<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Routecontroller extends Controller
{
    public function index(){
        return view('tugaspajum.index');
    }
    public function form(){
        return view('tugaspajum.form');
    }
    public function welcome(){
        return view('tugaspajum.welcome');
    }
}


