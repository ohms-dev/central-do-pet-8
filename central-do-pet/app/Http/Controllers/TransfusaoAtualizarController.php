<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoAtualizarController extends Controller
{
    public function atualizar(Request $request){
        try {
            $transfusao = transfusao::find($request->id);
            $transfusao->historico_id = $request->historico_id;
            $transfusao->data = $request->data;
            \App\Validator\transfusaoValidator::validate($transfusao->toArray());
            $transfusao->update();
            return redirect("/listar/transfusaos");
        }catch (\App\Validator\ValidationException $exception){
            return redirect('/listar/transfusaos')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
