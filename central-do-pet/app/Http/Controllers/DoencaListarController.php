<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoencaListarController extends Controller
{
    public function listar(){
        $doencas = \App\Models\doenca::all();
        return view('Doenca/listaDoencas', ['doencas' => $doencas]);
    }
}
