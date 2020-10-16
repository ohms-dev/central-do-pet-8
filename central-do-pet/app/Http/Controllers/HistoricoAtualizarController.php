<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoAtualizarController extends Controller
{
    public function atualizar(Request $request){
        try {
            $historico = \App\Models\historico::find($request->id);
            $historico->pet_id = $request->pet_id;
            $historico->alergias = $request->alergias;
            \App\Validator\historicoValidator::validate($historico->toArray());
            $historico->update();
            return redirect('/listar/historicos');
        }catch (\App\Validator\ValidationException $exception){
            return redirect('/listar/historicos')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
