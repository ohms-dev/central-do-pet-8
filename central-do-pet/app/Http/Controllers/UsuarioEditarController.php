<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioEditarController extends Controller
{
    public function editar(Request $request){
        $usuario = \app\Models\usuario::find($request->id);
        return view('Usuario/editarUsuario', ['usuario' => $usuario]);
    }
}
