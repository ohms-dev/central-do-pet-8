<?php

namespace App\Http\Controllers;

use App\Models\doenca;
use Illuminate\Http\Request;

class RacaController extends Controller
{
    public function editar(Request $request){
        $raca = doenca::find($request->id);
        return view(' /editarDoencas', ['raca' => $raca]);
    }
}
