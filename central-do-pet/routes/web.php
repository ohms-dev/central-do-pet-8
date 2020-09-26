<?php

use Illuminate\Support\Facades\Route;

Route::get('/listar/pets','App\Http\Controllers\PetController@listar');
Route::get('/adicionar/pet','App\Http\Controllers\PetController@prepararAdicionar');
Route::get('/editar/pet/{id}','App\Http\Controllers\PetController@editar');
Route::get('/remover/pet/{id}','App\Http\Controllers\PetController@remover');
Route::post('/atualizar/pet','App\Http\Controllers\PetController@atualizar');
Route::post('/adicionar/pet','App\Http\Controllers\PetController@adicionar');
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
