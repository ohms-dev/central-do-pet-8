<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaEditarController extends Controller
{
    public function editar(Request $request){
        $raca = raca::find($request->id);
        return view('Raca/atualizarRaca', ['raca' => $raca]);
    }
}
