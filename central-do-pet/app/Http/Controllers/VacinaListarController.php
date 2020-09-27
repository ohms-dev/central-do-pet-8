<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacinaListarController extends Controller
{
    public function listar(){
        $vacinas = \App\Models\vacina::all();
        return view('Vacina/listaVacinas',['vacinas' => $vacinas]);
    }
}
