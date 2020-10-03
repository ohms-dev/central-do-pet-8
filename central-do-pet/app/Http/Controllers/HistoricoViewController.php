<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoViewController extends Controller
{
    public function view($id){
        $historico = \App\Models\historico::find($id);
        $vacinas = \App\Models\vacina::all();
        return view('Historico/viewHistorico',['historico'=>$historico,'vacinas' => $vacinas]);
    }
}
