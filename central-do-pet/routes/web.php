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

#Rotas de dono
Route::get('/adicionar/dono', '\App\Http\Controllers\DonoController@prepararAdicionar');
Route::post('/adicionar/dono', '\App\Http\Controllers\DonoController@adicionar');
Route::get('/listar/dono', '\App\Http\Controllers\DonoController@listar');
Route::get('/editar/dono', '\App\Http\Controllers\DonoController@editar');
Route::post('/atualizar/dono', '\App\Http\Controllers\DonoController@atualizar');
Route::get('/remover/dono', '\App\Http\Controllers\DonoController@remover');





