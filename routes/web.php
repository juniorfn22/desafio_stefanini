<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/cadastroProduto',function(){
    return view('cadastroProduto');
})->name('cadastroProduto');

Route::get('/cadastroCliente',function(){
    return view('cadastroCliente');
})->name('cadastroCliente');

Route::post('/cadastrarProduto','App\Http\Controllers\ProdutosController@store')->name('cadastrarProduto');
Route::post('/cadastrarCliente','App\Http\Controllers\ClientesController@store')->name('cadastrarCliente');
Route::get('/listarProdutos','App\Http\Controllers\ProdutosController@index')->name('listarProdutos');
