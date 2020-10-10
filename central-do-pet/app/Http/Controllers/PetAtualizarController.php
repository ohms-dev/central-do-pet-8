<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetAtualizarController extends Controller
{
    public function atualizar(Request $request){
        if ($request->hasFile('foto')){
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .$extension;
            $file->move('fotos/pets', $filename);

        }else{
            $pet = \App\Models\pet::find($request->id);
            $filename = $pet->image;
        }
        $pet = \App\Models\pet::find($request->id);
        $pet->nome = $request->nome;
        $pet->sexo = $request->sexo;
        $pet->castrado = $request->castrado;
        $pet->necessidades_especiais = $request->necessidades_especiais;
        $pet->data_de_nascimento = $request->data_de_nascimento;
        $pet->dono_id = $request->dono_id;
        $pet->image = $filename;
        $pet->update();
        return redirect("listar/pets");
    }}
