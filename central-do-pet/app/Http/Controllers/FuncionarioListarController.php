<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FuncionarioListarController extends Controller
{
    public function listar(){
        $users = User::all();
        return view('User/listaFuncionarios', ['users' => $users]);

    }
}
