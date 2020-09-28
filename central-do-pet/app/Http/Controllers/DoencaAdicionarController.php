<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoencaAdicionarController extends Controller
{
    public function adicionar(Request $request){
      try{
          (new \App\Validator\doencaValidator)->validate($request->all());
          $dados = $request->all();
          \App\Models\doenca::create($dados);
          return redirect('listar/doencas');
      }catch (\App\Validator\ValidationException $exception){
          $listaHistoricos = \App\Models\doenca::all();
          return redirect('adicionar/doencas')
              ->withErrors($exception->getValidator())
              ->withInput();
      }
    }
}
