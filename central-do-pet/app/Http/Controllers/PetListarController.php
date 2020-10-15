<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Symfony\Component\String\s;

class PetListarController extends Controller
{
    public function listar($racas = null){
        $especie_unique = \App\Models\pet::all()->pluck('especie')->unique();
        if($racas != null){
            $pets = \App\Models\pet::all();
            $selecionados = array();
            foreach ($pets as $pet){
                if(trim($pet->especie) == trim($racas)){
                    array_push($selecionados, $pet);
                }

            }

            return view('Pet/listaPets', ['pets' => $selecionados, 'especies' => $especie_unique]);
        }else{
            $pets = \App\Models\pet::all();
            return view('Pet/listaPets',['pets' => $pets, 'especies' => $especie_unique]);
        }

    }

    public function listarTutor($racas = null){
        $especie_unique = \App\Models\pet::all()->pluck('especie')->unique();
        if($racas != null){
            $pets = \App\Models\pet::all();
            $selecionados = array();
            foreach ($pets as $pet){
                if(trim($pet->especie) == trim($racas)){
                    array_push($selecionados, $pet);
                }

            }

            return view('Pet/listaPetsTutor', ['pets' => $selecionados, 'especies' => $especie_unique]);
        }else{
            $pets = \App\Models\pet::all();
            return view('Pet/listaPetsTutor',['pets' => $pets, 'especies' => $especie_unique]);
        }

    }


}
