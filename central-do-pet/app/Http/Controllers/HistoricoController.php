<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function listar(){
        $historicos = historico::all();
        return view('Historico/listaHistoricos', ['historicos' => $historicos]);
    }

    public function prepararAdicionar(Request $request){
        return view('Historico/adicionarHistorico');

    }

    public function adicionar(Request $request){
        $historico = new \app\Models\historico();
        $historico->pet_id = $request->pet_id;
        $historico->alergias = $request->alergias;
        $historico->save();
        return redirect('/listar/historicos');

    }


}
