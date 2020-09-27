<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaAdicionarController extends Controller
{
    public function adicionar(Request $request){
        $raca = new raca();
        $raca->pet_id = $request->pet_id;
        $raca->especie = $request->especie;
        $raca->porte = $request->porte;
        $raca->cor = $request->cor;
        $raca->save();
        return redirect("listar/racas");
    }}
