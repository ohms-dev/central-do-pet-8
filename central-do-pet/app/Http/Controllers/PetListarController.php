<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetListarController extends Controller
{
    public function listar(){
        $pets = \App\Models\pet::all();
        return view('Pet/listaPets',['pets' => $pets]);
    }
}
