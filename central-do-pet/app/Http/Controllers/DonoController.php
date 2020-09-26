<?php

namespace App\Http\Controllers;

use App\Models\dono;
use Illuminate\Http\Request;

class DonoController extends Controller
{
    public function listar() {
        $donos = \App\Models\dono::all();
        return view('Dono/listaDonos', ['donos' => $donos]);
    }

    public function prepararAdicionar(){
        return view('Dono/adicionarDono');
    }

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
        return view('listar/donos');
    }

    public function editar(Request $request) {
        $dono = \App\Models\dono::find($request->id);
        return redirect('Dono/atualizarDono', ['dono' => $dono]);
    }

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
    }

    public function remover(Request $request){
        $dono = \App\Models\dono::find($request->id);
        $dono-> dono::delete();
        return redirect("/listar/donos");
    }
}
