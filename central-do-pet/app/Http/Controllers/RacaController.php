<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaController extends Controller
{
    public function editar(Request $request){
        $raca = raca::find($request->id);
        return view('Raca/editarRaca', ['raca' => $raca]);
    }

    public function listar(){
        $raca = raca::all();
        return view('Raca/listaRacas',['raca' => $raca]);
    }

    public function prepararAdicionar(Request $request){
        return view('Raca/adicionarRaca');
    }

    public function adicionar(Request $request){
        $raca = new raca();
        $raca->pet_id = $request->pet_id;
        $raca->especie = $request->especie;
        $raca->porte = $request->porte;
        $raca->cor = $request->cor;
        $raca->save();
        return redirect("listar/racas");
    }

    public function atualizar(Request $request){
        $raca = raca::find($request->id);
        $raca->pet_id = $request->pet_id;
        $raca->especie = $request->especie;
        $raca->porte = $request->porte;
        $raca->cor = $request->cor;
        $raca->raca::update();
        return redirect("listar/racas");
    }

    public function remover(Request $request){
        $raca = raca::find($request->id);
        $raca->raca::delete();
        return redirect("/listar/racas");
    }
}
