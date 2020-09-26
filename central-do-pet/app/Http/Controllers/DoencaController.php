<?php

namespace App\Http\Controllers;

use App\Models\doenca;
use Illuminate\Http\Request;


class DoencaController extends Controller
{
  public function listar(){
    $doencas = \App\Models\doenca::all();
    return view('listaDoencas', ['doencas' => $doencas]);
  }

  public function prepararAdicionar(Request $request){
    return view('adicionarDoencas');
  }

  public function adicionar(Request $request){
    $doenca = new \App\Models\doenca();
    $doenca->doenca = $request->doenca;
    $doenca->historico_id = $request->historico_id;
    $doenca->data = $request->data;
    $doenca->save();
    return redirect("listar/doencas");
  }

  public function editar(Request $request){
    $doenca = \App\Models\doenca::find($request->id);
    return view('editarDoencas', ['doenca' => $doenca]);
  }

  public function atualizar(Request $request){
    $doenca = \App\Models\doenca::find($request->id);
    $doenca->doenca = $request->doenca;
    $doenca->historico_id = $request->historico_id;
    $doenca->data = $request->data;
    $doenca->update();
    return redirect("/listar/doencas");
  }

  public function remover(Request $request){
    $doenca = \App\Models\doenca::find($request->id);
    $doenca->delete();
    return redirect("/listar/doencas");
  }

}
