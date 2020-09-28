<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetAdicionarController extends Controller
{
    public function adicionar(Request $request){
        try {
            \App\Validator\petValidator::validate($request->all());
            \App\Models\pet::create($request->all());
            return "Pet criado";
        } catch (\App\Validator\ValidationException $exception){
            return redirect('adicionar/pet')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
        $pet = new \App\Models\pet();
        $pet->nome = $request->nome;
        $pet->sexo = $request->sexo;
        $pet->castrado = $request->castrado;
        $pet->necessidades_especiais = $request->necessidades_especiais;
        $pet->data_de_nascimento = $request->data_de_nascimento;
        $pet->save();
        return redirect("listar/pets");
    }
}
