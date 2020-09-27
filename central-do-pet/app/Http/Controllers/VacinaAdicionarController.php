<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacinaAdicionarController extends Controller
{
    public function adicionar(Request $request){
        $vacina = new \App\Models\vacina();
        $vacina->historico_id = $request->historico_id;
        $vacina->vacina = $request->vacina;
        $vacina->data = $request->data;
        $vacina->save();
        return redirect("listar/vacinas");
    }
}
