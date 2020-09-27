<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransfusaoPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('transfusao/adicionarTransfusao');
    }
}
