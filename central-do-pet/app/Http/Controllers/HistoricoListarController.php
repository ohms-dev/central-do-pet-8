<?php

namespace App\Http\Controllers;

use App\Models\historico;
use App\Models\pet;
use Illuminate\Http\Request;

class HistoricoListarController extends Controller
{
    public function listar(){
        $historicos = historico::all();
        $pets = pet::all();
        return view('Historico/listaHistoricos', ['historicos' => $historicos, 'pets'=>$pets]);
    }
}
