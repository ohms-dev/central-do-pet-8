<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetEditarController extends Controller
{
    public function editar(Request $request){
        $pet = \App\Models\pet::find($request->id);
        return view('Pet/atualizarPet',['pet' => $pet]);
    }
}
