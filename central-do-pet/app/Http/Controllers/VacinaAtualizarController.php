<?php

namespace App\Http\Controllers;

use App\Models\vacina;
use Illuminate\Http\Request;

class VacinaAtualizarController extends Controller
{
    public function atualizar(Request $request){
        try {
            $vacina = vacina::find($request->id);
            $vacina->historico_id = $request->historico_id;
            $vacina->vacina = $request->vacina;
            $vacina->data = $request->data;
            \App\Validator\vacinaValidator::validate($vacina->toArray());
            $vacina->update();
            return redirect("/listar/vacinas");
        }catch (\App\Validator\ValidationException $exception){
            return redirect('/listar/vacinas')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
