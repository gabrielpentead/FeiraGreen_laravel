<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home()
    {
        $result = Produto::all();
        return view('home', compact('result'));
    }
    
}
