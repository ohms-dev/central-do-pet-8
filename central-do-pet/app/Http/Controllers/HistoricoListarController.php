<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoListarController extends Controller
{
    public function listar(){
        $historicos = historico::all();
        return view('Historico/listaHistoricos', ['historicos' => $historicos]);
    }
}
