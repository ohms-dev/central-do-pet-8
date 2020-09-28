<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoAdicionarController extends Controller
{
    public function adicionar(Request $request){
        $historico = new \App\Models\historico();
        $historico->pet_id = $request->pet_id;
        $historico->alergias = $request->alergias;
        $historico->save();
        return redirect('listar/historicos');

    }
}
