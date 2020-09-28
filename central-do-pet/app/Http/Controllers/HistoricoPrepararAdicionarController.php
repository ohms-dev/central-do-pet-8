<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoricoPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('Historico/adicionarHistorico');

    }
}
