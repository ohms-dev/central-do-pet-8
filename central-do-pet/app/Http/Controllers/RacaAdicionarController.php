<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaAdicionarController extends Controller
{
    public function adicionar(Request $request){
        try {
            (new \App\Validator\racaValidator)->validate($request->all());
            $dados = $request->all();
            \App\Models\raca::create($dados);
            return redirect('listar/racas');
        }catch (\App\Validator\ValidationException $exception){
            $listaRacas = \App\Models\raca::all();
            return redirect('adicionar/raca')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }}
