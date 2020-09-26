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

#RotasDeUsuario
Route::get('/prepararAdicionarUsuario', "\App\Http\Controllers\UsuarioController@prepararAdicionar");
Route::get('/adicionar/Usuario', "\App\Http\Controllers\UsuarioController@adicionar");
Route::get('/listar/Usuario', "\App\Http\Controllers\UsuarioController@listar");
Route::get('/editar/Usuario/{id}', "\App\Http\Controllers\UsuarioController@editar");
Route::get('/Atualizar/Usuario', "\App\Http\Controllers\UsuarioController@atualizar");
Route::get('/remover/Usuario', "\App\Http\Controllers\UsuarioController@remover");

#RotasDeDoenca
Route::get('/listar/doencas', '\App\Http\Controllers\DoencaController@listar');
Route::get('/editar/doencas/{id}', '\App\Http\Controllers\DoencaController@editar');
Route::get('/remover/doencas/{id}', '\App\Http\Controllers\DoencaController@remover');
Route::get('/atualizar/doencas', '\App\Http\Controllers\DoencaController@atualizar');
Route::get('/adicionar/doencas', '\App\Http\Controllers\DoencaController@prepararAdicionar');
Route::post('/adicionar/doencas', '\App\Http\Controllers\DoencaController@adicionar');

#RotasDePet
Route::post('/listar/pet', '\App\Http\Controllers\PetController@listar');
Route::post('/adicionar/pet', '\App\Http\Controllers\PetController@prepararAdicionar');
Route::post('/editar/pet/{id}', '\App\Http\Controllers\PetController@editar');
Route::post('/remover/pet/{id}', '\App\Http\Controllers\PetController@remover');
Route::post('/atualizar/pet', '\App\Http\Controllers\PetController@atualizar');
Route::post('/adicionar/pet', '\App\Http\Controllers\PetController@adicionar');






