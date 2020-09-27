<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacinaPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('Vacina/adicionarVacina');
    }
}
