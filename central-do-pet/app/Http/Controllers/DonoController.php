<?php

namespace App\Http\Controllers;

use App\Models\dono;
use Illuminate\Http\Request;

class DonoController extends Controller
{
    public function listar() {
        $donos = dono::all();
        return view('listaDonos', ['donos' => $donos]);
    }

    public function editar(Request $request) {
        $dono = dono::find($request->id);
        return view('editarDono', ['dono' => $dono]);
    }

    public function atualizar(Request $request){
        $dono = dono::find($request->id);
        $dono-> pet_id -> $request-> pet_id;
        $dono-> cpf -> $request-> cpf;
        $dono-> nome -> $request-> nome;
        $dono-> contato -> $request-> contato;
        $dono-> endereco -> $request-> endereco;
        $dono-> sexo -> $request-> sexo;
        $dono-> email -> $request-> email;
        $dono-> data_de_nascimento -> $request-> data_de_nascimento;
        $dono->update();
        return redirect("/listar/donos");
    }
}
