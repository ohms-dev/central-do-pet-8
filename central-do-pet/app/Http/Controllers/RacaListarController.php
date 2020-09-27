<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaListarController extends Controller
{
    public function listar(){
        $raca = raca::all();
        return view('Raca/listaRacas',['raca' => $raca]);
    }
}
