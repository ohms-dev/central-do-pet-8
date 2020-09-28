<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoAdicionarController extends Controller
{
    public function adicionar(Request $request){
        $transfusao = new \App\Models\transfusao();
        $transfusao->historico_id = $request->historico_id;
        $transfusao->data = $request->data;
        print($request->historico_id);
        $transfusao->save();
        return redirect("listar/transfusaos");
    }
}
