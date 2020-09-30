<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAdicionarController extends Controller
{

    public function adicionar(Request $request){
        try{

            \App\Validator\UserValidator::validate($request->all());
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'contato' => $request->contato,
                'endereco' => $request->endereco,
                'funcao' => $request->funcao,
                'sexo' => $request->sexo,
                'data_de_nascimento' => $request->data_de_nascimento,
            ]);
            return redirect('listar/users');
        } catch (\App\Validator\ValidationException $exception){
            return redirect('adicionar/user')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
