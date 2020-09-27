<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoEditarController extends Controller
{
    public function editar(Request $request){
        $transfusao = transfusao::find($request->id);
        return view('Transfusao/atualizarTransfusao',['transfusao' => $transfusao]);
    }
}
