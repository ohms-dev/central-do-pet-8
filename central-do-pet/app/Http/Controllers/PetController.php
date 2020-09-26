<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pet;

class PetController extends Controller
{

  public function listar(){
    $pets = \App\Models\pet::all();
    return view('Pet/listaPets',['pets' => $pets]);
  }

  public function prepararAdicionar(Request $request){
    return view('Pet/adicionarPet');
  }

  public function adicionar(Request $request){
    $pet = new \App\Models\pet();
    $pet->nome = $request->nome;
    $pet->sexo = $request->sexo;
    $pet->castrado = $request->castrado;
    $pet->necessidades_especiais = $request->necessidades_especiais;
    $pet->data_de_nascimento = $request->data_de_nascimento;
    $pet->save();
    return redirect("listar/pets");
  }

  public function editar(Request $request){
    $pet = \App\Models\pet::find($request->id);
    return view('Pet/atualizarPet',['pet' => $pet]);
  }

  public function atualizar(Request $request){
    $pet = \App\Models\pet::find($request->id);
    $pet->nome = $request->nome;
    $pet->sexo = $request->sexo;
    $pet->castrado = $request->castrado;
    $pet->necessidades_especiais = $request->necessidades_especiais;
    $pet->data_de_nascimento = $request->data_de_nascimento;
    $pet->update();
    return redirect("listar/pets");
  }

  public function remover(Request $request){
    $pet = \App\Models\pet::find($request->id);
    $pet->delete();
    return redirect("/listar/pets");
  }
}
