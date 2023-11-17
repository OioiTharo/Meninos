<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Carrinho;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        $carrinhos = Carrinho::all();
        return view('carrinho.index', ['produtos' =>  $produtos, 'carrinhos' => $carrinhos]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carrinho $carrinho)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carrinho $carrinho)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carrinho $carrinho)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carrinho $carrinho)
    {
        //
    }
}
