<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('Usuario/adicionarUsuario');
    }

}
