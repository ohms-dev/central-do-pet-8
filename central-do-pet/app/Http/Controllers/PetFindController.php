<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetFindController extends Controller
{
    public static function findPetRga(Request $request){
        $pet = \App\Models\pet::getPetRga($request->rga);
        if ($pet != null)
            return (new PetViewController)->view($pet->id);
        else
            return view('Consulta/consultaRgaPet',['flag'=>false]);
    }
}
