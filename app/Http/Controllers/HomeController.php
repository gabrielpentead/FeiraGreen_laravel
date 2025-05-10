<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class HomeController extends Controller
{
    public function home()
    {
        $result = Produto::all(); 

        return view('home', compact('result'));
    }
}
