<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    public function listar(){
        $historicos = historico::all();
        return view('listaHistoricos', ['historicos' => $historicos]);
    }


}
