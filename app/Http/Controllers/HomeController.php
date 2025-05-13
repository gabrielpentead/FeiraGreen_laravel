<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function home()
    {
        $result = Produto::all();

        $jsonPath = public_path('imagens/imagens.json');
        $imagens = File::exists($jsonPath)
            ? json_decode(File::get($jsonPath), true)
            : [];

        return view('home', compact('result', 'imagens'));
    }
}
