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
  
}
