<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $pet = \App\Models\pet::find($request->id);
        $pet->nome = $request->nome;
        $pet->sexo = $request->sexo;
        $pet->castrado = $request->castrado;
        $pet->necessidades_especiais = $request->necessidades_especiais;
        $pet->data_de_nascimento = $request->data_de_nascimento;
        $pet->update();
        return redirect("listar/pets");
    }}
