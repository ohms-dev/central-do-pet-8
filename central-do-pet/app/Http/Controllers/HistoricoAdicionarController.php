<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoAdicionarController extends Controller
{
    public function adicionar(Request $request){
        try{
            (new \App\Validator\historicoValidator)->validate($request->all());
            $dados = $request->all();
            \App\Models\historico::create($dados);
            return redirect('listar/historicos');
        }catch (\App\Validator\ValidationException $exception){
            $listaHistoricos = \App\Models\historico::all();
            return redirect('adicionar/historico')
                ->withErrors($exception->getValidator())
                ->withInput();
        }

        /*
        $historico = new \App\Models\historico();
        $historico->pet_id = $request->pet_id;
        $historico->alergias = $request->alergias;
        $historico->save();
        return redirect('listar/historicos');
        */

    }
}
