<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoAdicionarController extends Controller
{
    public function adicionar(Request $request){
        try {
            (new \App\Validator\transfusaoValidator)->validate($request->all());
            $dados = $request->all();
            \App\Models\transfusao::create($dados);
            return redirect('listar/transfusaos');
        }catch (\App\Validator\ValidationException $exception){
            $listaTransfusaos = \App\Models\transfusao::all();
            return redirect('adicionar/transfusao')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
