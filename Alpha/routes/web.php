<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

//rota pro home
Route::get('/', [WelcomeController::class, 'welcome']);

//rota categorias
Route::resource('/categorias', CategoriaController::class);

//rota produtos
Route::resource('/produtos', ProdutoController::class);

Route::middleware('auth')->group(function () {

    //rota para logout
    Route::get('/logout', function () {
        Auth::logout();
        return redirect ("/");
    });

    //rota de perfil
    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');

    //rota carrinho
    Route::resource('/carrinho', CarrinhoController::class);

    //rota do perfil do usuario breeze
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
