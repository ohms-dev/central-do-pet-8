<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRemoverController extends Controller
{
    public function remover(Request $request){
        $user = \App\Models\User::find($request->id);
        $user->delete();
        return redirect('listar/users');
    }
}
