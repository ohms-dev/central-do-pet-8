<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserListarController extends Controller
{
    public function listar(){
        $users = User::all();
        return view('User/listaUsers', ['users' => $users]);

    }
}
