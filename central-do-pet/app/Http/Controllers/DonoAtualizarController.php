<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonoAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $dono = \App\Models\dono::find($request->id);
        $dono-> pet_id = $request-> pet_id;
        $dono-> cpf = $request-> cpf;
        $dono-> nome = $request-> nome;
        $dono-> contato = $request-> contato;
        $dono-> endereco = $request-> endereco;
        $dono-> sexo = $request-> sexo;
        $dono-> email = $request-> email;
        $dono-> data_de_nascimento = $request-> data_de_nascimento;
        $dono-> dono::update();
        return redirect("listar/donos");
    }}
