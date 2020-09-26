<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdicionarDoencasController extends Controller
{
    public function adicionar(Request $request){
        $doenca = new \App\Models\doenca();
        $doenca->doenca = $request->doenca;
        $doenca->historico_id = $request->historico_id;
        $doenca->data = $request->data;
        $doenca->save();
        return redirect("listar/doencas");
    }
}
