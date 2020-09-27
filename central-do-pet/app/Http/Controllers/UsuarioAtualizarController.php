<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $usuario = \App\Models\usuario::find($request->id);
        $usuario->nome = $request->nome;
        $usuario->contato = $request->contato;
        $usuario->endereco = $request->endereco;
        $usuario->senha = $request->senha;
        $usuario->funcao = $request->funcao;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->data_de_nascimento = $request->data_de_nascimento;
        $usuario->update();
        return redirect('listar/usuarios');

    }
}
