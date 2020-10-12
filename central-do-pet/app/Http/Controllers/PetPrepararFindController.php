<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetPrepararFindController extends Controller{
    public function prepararFind(Request $request){
        return view('Consulta/consultaRgaPet',['flag'=>true]);
    }
}
