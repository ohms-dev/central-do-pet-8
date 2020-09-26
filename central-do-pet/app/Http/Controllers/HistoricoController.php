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
        return redirect('Historico/listar/historicos');

    }

    public function editar(Request $request){
        $historico = historico::find($request->id);
        return view('Historico/editarHistorico', ['historico' => $historico]);

    }

    public function atualizar(Request $request){
        $historico = historico::find($request->id);
        $historico->pet_id = $request->pet_id;
        $historico->alergias = $request->alergias;
        $historico->update();
        return redirect('Historico/listar/historicos');
    }


}
