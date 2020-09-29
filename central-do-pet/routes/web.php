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

#Routes doenca
Route::get('/listar/doencas', '\App\Http\Controllers\DoencaListarController@listar');
Route::get('/editar/doencas/{id}', '\App\Http\Controllers\DoencaEditarController@editar');
Route::get('/remover/doencas/{id}', '\App\Http\Controllers\DoencaRemoverController@remover');
Route::post('/atualizar/doencas', '\App\Http\Controllers\DoencaAtualizarController@atualizar');
Route::get('/adicionar/doencas', '\App\Http\Controllers\DoencaPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/doencas', '\App\Http\Controllers\DoencaAdicionarController@adicionar');

#Routes pets
Route::get('/listar/pets','App\Http\Controllers\PetListarController@listar');
Route::get('/adicionar/pet','App\Http\Controllers\PetPrepararAdicionarController@prepararAdicionar');
Route::get('/editar/pet/{id}','App\Http\Controllers\PetEditarController@editar');
Route::get('/remover/pet/{id}','App\Http\Controllers\PetRemoverController@remover');
Route::post('/atualizar/pet','App\Http\Controllers\PetAtualizarController@atualizar');
Route::post('/adicionar/pet','App\Http\Controllers\PetAdicionarController@adicionar');

#Rotas de dono
Route::get('/adicionar/dono', '\App\Http\Controllers\DonoPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/dono', '\App\Http\Controllers\DonoAdicionarController@adicionar');
Route::get('/listar/donos', '\App\Http\Controllers\DonoListarController@listar');
Route::get('/editar/dono/{id}', '\App\Http\Controllers\DonoEditarController@editar');
Route::post('/atualizar/dono', '\App\Http\Controllers\DonoAtualizarController@atualizar');
Route::get('/remover/dono/{id}', '\App\Http\Controllers\DonoRemoverController@remover');

#Rotas de raca
Route::get('/adicionar/raca', '\App\Http\Controllers\RacaPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/raca', '\App\Http\Controllers\RacaAdicionarController@adicionar');
Route::get('/listar/racas', '\App\Http\Controllers\RacaListarController@listar');
Route::get('/editar/raca/{id}', '\App\Http\Controllers\RacaEditarController@editar');
Route::post('/atualizar/raca', '\App\Http\Controllers\RacaAtualizarController@atualizar');
Route::get('/remover/raca/{id}', '\App\Http\Controllers\RacaRemoverController@remover');

#Rotas de transfusão
Route::get('/adicionar/transfusao', '\App\Http\Controllers\TransfusaoPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/transfusao', '\App\Http\Controllers\TransfusaoAdicionarController@adicionar');
Route::get('/listar/transfusaos', '\App\Http\Controllers\TransfusaoListarController@listar');
Route::get('/editar/transfusao/{id}', '\App\Http\Controllers\TransfusaoEditarController@editar');
Route::post('/atualizar/transfusao', '\App\Http\Controllers\TransfusaoAtualizarController@atualizar');
Route::get('/remover/transfusao/{id}', '\App\Http\Controllers\TransfusaoRemoverController@remover');

#Rotas de historico
Route::get('/adicionar/historico', '\App\Http\Controllers\HistoricoPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/historico', '\App\Http\Controllers\HistoricoAdicionarController@adicionar');
Route::get('/listar/historicos', '\App\Http\Controllers\HistoricoListarController@listar');
Route::get('/editar/historico/{id}', '\App\Http\Controllers\HistoricoEditarController@editar');
Route::post('/atualizar/historico', '\App\Http\Controllers\HistoricoAtualizarController@atualizar');
Route::get('/remover/historico/{id}', '\App\Http\Controllers\HistoricoRemoverController@remover');

#Rotas de vacina
Route::get('/adicionar/vacina', '\App\Http\Controllers\VacinaPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/vacina', '\App\Http\Controllers\VacinaAdicionarController@adicionar');
Route::get('/listar/vacinas', '\App\Http\Controllers\VacinaListarController@listar');
Route::get('/editar/vacina/{id}', '\App\Http\Controllers\VacinaEditarController@editar');
Route::post('/atualizar/vacina', '\App\Http\Controllers\VacinaAtualizarController@atualizar');
Route::get('/remover/vacina/{id}', '\App\Http\Controllers\VacinaRemoverController@remover');

#Rotas de usuario
Route::get('/adicionar/user', '\App\Http\Controllers\UserPrepararAdicionarController@prepararAdicionar');
Route::post('/adicionar/user', '\App\Http\Controllers\UserAdicionarController@adicionar');
Route::get('/listar/users', '\App\Http\Controllers\UserListarController@listar');
Route::get('/editar/user/{id}', '\App\Http\Controllers\UserEditarController@editar');
Route::post('/atualizar/user', '\App\Http\Controllers\UserAtualizarController@atualizar');
Route::get('/remover/user/{id}', '\App\Http\Controllers\UserRemoverController@remover');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
