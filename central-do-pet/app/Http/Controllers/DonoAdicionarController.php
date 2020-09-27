<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonoAdicionarController extends Controller
{
    public function adicionar(Request $request) {
        $dono = new \App\Models\dono();
        $dono-> pet_id = $request-> pet_id;
        $dono-> cpf = $request-> cpf;
        $dono-> nome = $request-> nome;
        $dono-> contato = $request-> contato;
        $dono-> endereco = $request-> endereco;
        $dono-> sexo = $request-> sexo;
        $dono-> email = $request-> email;
        $dono-> data_de_nascimento = $request-> data_de_nascimento;
        $dono-> save();
        return redirect('listar/donos');
    }

}