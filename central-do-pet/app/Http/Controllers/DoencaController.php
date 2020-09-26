<?php

namespace App\Http\Controllers;

use App\Models\doenca;
use Illuminate\Http\Request;


class DoencaController extends Controller
{
  public function listar(){
    $doencas = \central-do-pet\doenca::all();
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
  }

}
