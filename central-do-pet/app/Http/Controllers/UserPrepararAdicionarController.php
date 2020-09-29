<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('User/adicionarUser');
    }

}
