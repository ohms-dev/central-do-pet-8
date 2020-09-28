<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(Request $request){
        return view('Pet/adicionarPet');
    }
}
