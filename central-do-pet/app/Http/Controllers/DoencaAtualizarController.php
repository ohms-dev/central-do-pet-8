<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoencaAtualizarController extends Controller
{
    public function atualizar(Request $request){
        try {
            $doenca = \App\Models\doenca::find($request->id);
            $doenca->doenca = $request->doenca;
            $doenca->historico_id = $request->historico_id;
            $doenca->data = $request->data;
            \App\Validator\doencaValidator::validate($doenca->toArray());
            $doenca->update();
            return redirect("/listar/doencas");
        } catch (\App\Validator\ValidationException $exception){
            return redirect('/listar/doencas')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
