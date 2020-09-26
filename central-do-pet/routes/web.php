<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prepararAdcionarUsuario', "\App\Http\Controllers\UsuarioController@prepararAdicionar");
Route::get('/adicionarUsuario', "\App\Http\Controllers\UsuarioController@adicionar");
Route::get('/listarUsuario', "\App\Http\Controllers\UsuarioController@listar");
Route::get('/editarUsuario', "\App\Http\Controllers\UsuarioController@editar");
Route::get('/AtualizarUsuario', "\App\Http\Controllers\UsuarioController@atualizar");
Route::get('/adicionarUsuario', "\App\Http\Controllers\UsuarioController@adicionar");
