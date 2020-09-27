<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoAdicionarController extends Controller
{
    public function adicionar(Request $request){
        $transfusao = new transfusao();
        $transfusao->historico_id = $request->data;
        $transfusao->data = $request->data;
        $transfusao->save();
        return redirect("listar/transfusaos");
    }
}
