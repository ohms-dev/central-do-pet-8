<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $raca = raca::find($request->id);
        $raca->pet_id = $request->pet_id;
        $raca->especie = $request->especie;
        $raca->porte = $request->porte;
        $raca->cor = $request->cor;
        $raca->update();
        return redirect("listar/racas");
    }
}
