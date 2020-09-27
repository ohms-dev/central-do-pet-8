<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $transfusao = transfusao::find($request->id);
        $transfusao->historico_id = $request->data;
        $transfusao->data = $request->data;
        $transfusao->update();
        return redirect("listar/transfusaos");
    }
}
