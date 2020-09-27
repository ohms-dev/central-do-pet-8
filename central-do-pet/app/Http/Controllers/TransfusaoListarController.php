<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoListarController extends Controller{

    public function listar(){
        $transfusaos = transfusao::all();
        return view('Transfusao/listaTransfusaos',['transfusaos' => $transfusaos]);
    }
}
