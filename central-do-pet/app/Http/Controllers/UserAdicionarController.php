<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAdicionarController extends Controller
{
    public function adicionar(Request $request){
        try{
            \App\Validator\UserValidator::validate($request->all());
            \App\Models\User::create($request->all());
            return redirect('listar/users');
        } catch (\App\Validator\ValidationException $exception){
            return redirect('adicionar/user')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
        $user = new \App\Models\User();
        $user->name = $request->name;
        $user->contato = $request->contato;
        $user->endereco = $request->endereco;
        $user->password = $request->password;
        $user->funcao = $request->funcao;
        $user->email = $request->email;
        $user->sexo = $request->sexo;
        $user->data_de_nascimento = $request->data_de_nascimento;
        $user->save();
        return  redirect('listar\users');

    }
}
