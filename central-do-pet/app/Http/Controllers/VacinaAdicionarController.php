<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacinaAdicionarController extends Controller
{
  public function adicionar(Request $request){
    try{
        (new \App\Validator\vacinaValidator)->validate($request->all());
        $dados = $request->all();
        \App\Models\vacina::create($dados);
        return redirect('listar/vacinas');
    }catch (\App\Validator\ValidationException $exception){
        $listaHistoricos = \App\Models\vacina::all();
        return redirect('adicionar/vacina')
            ->withErrors($exception->getValidator())
            ->withInput();
    }
  }
}
