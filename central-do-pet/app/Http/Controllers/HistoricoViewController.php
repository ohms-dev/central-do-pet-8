<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoViewController extends Controller
{
    public function view($id){
        $historico = \App\Models\historico::find($id);
        $pet = \App\Models\pet::find($historico->pet_id);
        $vacinas = \App\Models\vacina::all();
        $doencas = \App\Models\doenca::all();
        $transfusaos = \App\Models\transfusao::all();
        return view('Historico/viewHistorico',['historico'=>$historico,'pet'=>$pet,'vacinas' => $vacinas, 'doencas'=>$doencas,'transfusaos'=>$transfusaos]);
    }
}
