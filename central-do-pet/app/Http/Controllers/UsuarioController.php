<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller{

    public function listar(){
        $usuarios = \app\Models\usuario::all();
        return view('listarUsuarios', ['usuarios' => $usuarios]);

    }

    public function prepararAdicionar(Request $request){
        return view('adicionarUsuario');
    }

    public function adicionar(Request $request){
        $usuario = new \app\Models\usuario();
        $usuario->nome = $request->nome;
        $usuario->contato = $request->contato;
        $usuario->endereco = &$request->endereco;
        $usuario->senha = $request->senha;
        $usuario->funcao = $request->funcao;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->data_de_nascimento = $request->data_de_nascimento;
        $usuario->save();
        return  redirect('\listar\usuarios');

    }

    public function editar(Request $request){
        $usuario = \app\Models\usuario::find($request->id);
        return view('editarUsuario', ['usuario' => $usuario]);
    }


}
