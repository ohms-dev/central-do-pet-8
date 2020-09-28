<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RacaPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('Raca/adicionarRaca');
    }
}
