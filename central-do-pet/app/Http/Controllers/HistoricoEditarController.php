<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoEditarController extends Controller
{
    public function editar(Request $request){
        $historico = historico::find($request->id);
        return view('Historico/editarHistorico', ['historico' => $historico]);

    }
}
