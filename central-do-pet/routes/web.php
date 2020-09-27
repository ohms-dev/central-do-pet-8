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

#RotasDeUsuario
Route::get('/prepararAdicionarUsuario', "\App\Http\Controllers\UsuarioController@prepararAdicionar");
Route::get('/adicionar/Usuario', "\App\Http\Controllers\UsuarioController@adicionar");
Route::get('/listar/Usuario', "\App\Http\Controllers\UsuarioController@listar");
Route::get('/editar/Usuario/{id}', "\App\Http\Controllers\UsuarioController@editar");
Route::get('/Atualizar/Usuario', "\App\Http\Controllers\UsuarioController@atualizar");
Route::get('/remover/Usuario', "\App\Http\Controllers\UsuarioController@remover");

Route::get('/listar/doencas', '\App\Http\Controllers\DoencaController@listar');
Route::get('/editar/doencas/{id}', '\App\Http\Controllers\DoencaController@editar');
Route::get('/remover/doencas/{id}', '\App\Http\Controllers\DoencaController@remover');
Route::get('/atualizar/doencas', '\App\Http\Controllers\DoencaController@atualizar');
Route::get('/adicionar/doencas', '\App\Http\Controllers\DoencaController@prepararAdicionar');
Route::post('/adicionar/doencas', '\App\Http\Controllers\DoencaController@adicionar');

Route::get('/listar/pets','App\Http\Controllers\PetController@listar');
Route::get('/adicionar/pet','App\Http\Controllers\PetController@prepararAdicionar');
Route::get('/editar/pet/{id}','App\Http\Controllers\PetController@editar');
Route::get('/remover/pet/{id}','App\Http\Controllers\PetController@remover');
Route::post('/atualizar/pet','App\Http\Controllers\PetController@atualizar');
Route::post('/adicionar/pet','App\Http\Controllers\PetController@adicionar');

#Rotas de dono
Route::get('/adicionar/dono', '\App\Http\Controllers\DonoController@prepararAdicionar');
Route::post('/adicionar/dono', '\App\Http\Controllers\DonoController@adicionar');
Route::get('/listar/donos', '\App\Http\Controllers\DonoController@listar');
Route::post('/editar/dono/{id}', '\App\Http\Controllers\DonoController@editar');
Route::get('/atualizar/dono', '\App\Http\Controllers\DonoController@atualizar');
Route::get('/remover/dono/{id}', '\App\Http\Controllers\DonoController@remover');

#Rotas de raca
Route::get('/adicionar/raca', '\App\Http\Controllers\RacaController@prepararAdicionar');
Route::post('/adicionar/raca', '\App\Http\Controllers\RacaController@adicionar');
Route::get('/listar/racas', '\App\Http\Controllers\RacaController@listar');
Route::post('/editar/raca/{id}', '\App\Http\Controllers\RacaController@editar');
Route::get('/atualizar/raca', '\App\Http\Controllers\RacaController@atualizar');
Route::get('/remover/raca/{id}', '\App\Http\Controllers\RacaController@remover');

#Rotas de transfusão
Route::get('/adicionar/transfusao', '\App\Http\Controllers\TransfusaoPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/transfusao', '\App\Http\Controllers\TransfusaoAdicionarController@adicionar');
Route::get('/listar/transfusaos', '\App\Http\Controllers\TransfusaoListarController@listar');
Route::post('/editar/transfusao/{id}', '\App\Http\Controllers\TransfusaoEditarController@editar');
Route::get('/atualizar/transfusao', '\App\Http\Controllers\TransfusaoAtualizarController@atualizar');
Route::get('/remover/transfusao/{id}', '\App\Http\Controllers\TransfusaoRemoverController@remover');
