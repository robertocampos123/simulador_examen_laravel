<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function tema1(){
        return view('profesor.tema1');
    }

    public function tema2(){
        return view('profesor.tema2');
    }

    public function tema3(){
        return view('profesor.tema3');
    }

    public function banco(){
        return view('profesor.banco');
    }
}
