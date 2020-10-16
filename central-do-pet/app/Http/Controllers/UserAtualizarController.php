<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAtualizarController extends Controller
{
    public function atualizar(Request $request){
        try {
            $user = \App\Models\User::find($request->id);
            $user->name = $request->name;
            $user->contato = $request->contato;
            $user->endereco = $request->endereco;
            $user->password = $request->password;
            $user->funcao = $request->funcao;
            $user->email = $request->email;
            $user->sexo = $request->sexo;
            $user->data_de_nascimento = $request->data_de_nascimento;
            \App\Validator\UserValidator::validate($user->toArray());
            $user->update();
            return redirect('/listar/users');
        }catch (\App\Validator\ValidationException $exception){
            return redirect('/listar/users')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
