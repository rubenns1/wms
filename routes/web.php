<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovimentacoesController;
use App\Http\Controllers\ProdutoController;

Route::resource('movimentacoes', MovimentacoesController::class);
Route::resource('produtos', ProdutoController::class);

/*
Route::get('/', function () {
    return view('welcome');
});
*/