<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioListarController extends Controller
{
    public function listar(){
        $usuarios = usuario::all();
        return view('Usuario/listaUsuarios', ['usuarios' => $usuarios]);

    }
}
