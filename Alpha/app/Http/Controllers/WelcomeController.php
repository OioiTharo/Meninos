<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Produto;
use App\Http\Controllers\ProdutoController;


class WelcomeController extends Controller
{
    public function welcome()
    {
        $produtos = Produto::all()->take(9);
        return view('welcome', ['produtos' => $produtos ]);
    }
}
