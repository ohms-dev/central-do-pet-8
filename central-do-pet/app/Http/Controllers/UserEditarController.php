<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserEditarController extends Controller
{
    public function editar(Request $request){
        $user = \App\Models\User::find($request->id);
        return view('User/atualizarUser', ['user' => $user]);
    }
}
