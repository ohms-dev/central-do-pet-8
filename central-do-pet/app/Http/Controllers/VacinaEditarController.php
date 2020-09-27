<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacinaEditarController extends Controller
{
    public function editar(Request $request){
        $vacina = \App\Models\vacina::find($request->id);
        return view('Vacina/atualizarVacina',['vacina' => $vacina]);
    }
}
