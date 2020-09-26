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

Route::get('/home', function () {
    return view('teste');
});

Route::get('/listar/doencas', '\App\Http\Controllers\DoencaController@listar');
Route::get('/editar/doencas/{id}', '\App\Http\Controllers\DoencaController@editar');
Route::get('/remover/doencas/{id}', '\App\Http\Controllers\DoencaController@remover');
Route::get('/atualizar/doencas', '\App\Http\Controllers\DoencaController@atualizar');
Route::get('/adicionar/doencas', '\App\Http\Controllers\DoencaController@prepararAdicionar');
Route::post('/adicionar/doencas', '\App\Http\Controllers\DoencaController@adicionar');
