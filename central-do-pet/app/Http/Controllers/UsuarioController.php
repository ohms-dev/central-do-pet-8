<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller{

    public function listar(){
        $usuarios = usuario::all();
        return view('Usuario/listarUsuarios', ['usuarios' => $usuarios]);

    }

    public function prepararAdicionar(Request $request){
        return view('Usuario/adicionarUsuario');
    }

    public function adicionar(Request $request){
        $usuario = new \App\Models\usuario();
        $usuario->nome = $request->nome;
        $usuario->contato = $request->contato;
        $usuario->endereco = $request->endereco;
        $usuario->senha = $request->senha;
        $usuario->funcao = $request->funcao;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->data_de_nascimento = $request->data_de_nascimento;
        $usuario->save();
        return  redirect('Usuario\listar\usuarios');

    }

    public function editar(Request $request){
        $usuario = \app\Models\usuario::find($request->id);
        return view('Usuario/editarUsuario', ['usuario' => $usuario]);
    }

    public function atualizar(Request &$request){
        $usuario = \app\Models\usuario::find($request->id);
        $usuario->nome = $request->nome;
        $usuario->contato = $request->contato;
        $usuario->endereco = &$request->endereco;
        $usuario->senha = $request->senha;
        $usuario->funcao = $request->funcao;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->data_de_nascimento = $request->data_de_nascimento;
        $usuario->update();
        return redirect('Usuario/listar/usuarios');

    }

    public function remover(Request $request){
        $usuario = \app\Models\usuario::find($request->id);
        $usuario->delete();
        return redirect('Usuario/listar/categorias');
    }


}
