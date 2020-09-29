<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioAdicionarController extends Controller
{
    public function adicionar(Request $request){
        try{
            \App\Validator\usuarioValidator::validate($request->all());
            \App\Models\usuario::create($request->all());
            return redirect('listar/usuarios');
        } catch (\App\Validator\ValidationException $exception){
            return redirect('adicionar/usuario')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
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
        return  redirect('listar\usuarios');

    }
}
