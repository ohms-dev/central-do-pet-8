<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use app\Http\Middleware\Authenticate;
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

#Routes doenca
Route::get('/listar/doencas', '\App\Http\Controllers\DoencaListarController@listar')->middleware('auth');
Route::get('/editar/doencas/{id}', '\App\Http\Controllers\DoencaEditarController@editar')->middleware('auth');
Route::get('/remover/doencas/{id}', '\App\Http\Controllers\DoencaRemoverController@remover')->middleware('auth');
Route::post('/atualizar/doencas', '\App\Http\Controllers\DoencaAtualizarController@atualizar')->middleware('auth');
Route::get('/adicionar/doencas', '\App\Http\Controllers\DoencaPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::post('/adicionar/doencas', '\App\Http\Controllers\DoencaAdicionarController@adicionar')->middleware('auth');

#Routes pets
Route::get('/listar/pets','App\Http\Controllers\PetListarController@listar');
Route::get('/adicionar/pet','App\Http\Controllers\PetPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::get('/editar/pet/{id}','App\Http\Controllers\PetEditarController@editar')->middleware('auth');
Route::get('/remover/pet/{id}','App\Http\Controllers\PetRemoverController@remover')->middleware('auth');
Route::post('/atualizar/pet','App\Http\Controllers\PetAtualizarController@atualizar')->middleware('auth');
Route::post('/adicionar/pet','App\Http\Controllers\PetAdicionarController@adicionar')->middleware('auth');
Route::get('/view/pet/{id}','App\Http\Controllers\PetViewController@view');

#Rotas de raca
Route::get('/adicionar/raca', '\App\Http\Controllers\RacaPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::post('/adicionar/raca', '\App\Http\Controllers\RacaAdicionarController@adicionar')->middleware('auth');
Route::get('/listar/racas', '\App\Http\Controllers\RacaListarController@listar')->middleware('auth');
Route::get('/editar/raca/{id}', '\App\Http\Controllers\RacaEditarController@editar')->middleware('auth');
Route::post('/atualizar/raca', '\App\Http\Controllers\RacaAtualizarController@atualizar')->middleware('auth');
Route::get('/remover/raca/{id}', '\App\Http\Controllers\RacaRemoverController@remover')->middleware('auth');

#Rotas de transfusão
Route::get('/adicionar/transfusao', '\App\Http\Controllers\TransfusaoPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::post('/adicionar/transfusao', '\App\Http\Controllers\TransfusaoAdicionarController@adicionar')->middleware('auth');
Route::get('/listar/transfusaos', '\App\Http\Controllers\TransfusaoListarController@listar')->middleware('auth');
Route::get('/editar/transfusao/{id}', '\App\Http\Controllers\TransfusaoEditarController@editar')->middleware('auth');
Route::post('/atualizar/transfusao', '\App\Http\Controllers\TransfusaoAtualizarController@atualizar')->middleware('auth');
Route::get('/remover/transfusao/{id}', '\App\Http\Controllers\TransfusaoRemoverController@remover')->middleware('auth');

#Rotas de historico
Route::get('/adicionar/historico', '\App\Http\Controllers\HistoricoPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::post('/adicionar/historico', '\App\Http\Controllers\HistoricoAdicionarController@adicionar')->middleware('auth');
Route::get('/listar/historicos', '\App\Http\Controllers\HistoricoListarController@listar')->middleware('auth');
Route::get('/editar/historico/{id}', '\App\Http\Controllers\HistoricoEditarController@editar')->middleware('auth');
Route::post('/atualizar/historico', '\App\Http\Controllers\HistoricoAtualizarController@atualizar')->middleware('auth');
Route::get('/remover/historico/{id}', '\App\Http\Controllers\HistoricoRemoverController@remover')->middleware('auth');
Route::get('view/historico/{id}','\App\Http\Controllers\HistoricoViewController@view');

#Rotas de vacina
Route::get('/adicionar/vacina', '\App\Http\Controllers\VacinaPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::post('/adicionar/vacina', '\App\Http\Controllers\VacinaAdicionarController@adicionar')->middleware('auth');
Route::get('/listar/vacinas', '\App\Http\Controllers\VacinaListarController@listar')->middleware('auth');
Route::get('/editar/vacina/{id}', '\App\Http\Controllers\VacinaEditarController@editar')->middleware('auth');
Route::post('/atualizar/vacina', '\App\Http\Controllers\VacinaAtualizarController@atualizar')->middleware('auth');
Route::get('/remover/vacina/{id}', '\App\Http\Controllers\VacinaRemoverController@remover')->middleware('auth');

#Rotas de usuario
Route::get('/adicionar/user', '\App\Http\Controllers\UserPrepararAdicionarController@prepararAdicionar')->middleware('auth');
Route::post('/adicionar/user', '\App\Http\Controllers\UserAdicionarController@adicionar')->middleware('auth');
Route::get('/listar/users', '\App\Http\Controllers\UserListarController@listar');
Route::get('/editar/user/{id}', '\App\Http\Controllers\UserEditarController@editar')->middleware('auth');
Route::post('/atualizar/user', '\App\Http\Controllers\UserAtualizarController@atualizar')->middleware('auth');
Route::get('/remover/user/{id}', '\App\Http\Controllers\UserRemoverController@remover')->middleware('auth');

Route::get('/paineladm', function () {
    return view('painelAdministrador');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
