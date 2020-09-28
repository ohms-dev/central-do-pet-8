<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaListarController extends Controller
{
    public function listar(){
        $racas = raca::all();
        return view('Raca/listaRacas',['racas' => $racas]);
    }
}
