<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetFindController extends Controller
{
    public static function findPetRga($request){
        $pet = \App\Models\pet::getPetRga($request);
        #return view('view/pet/'.$pet->id,['pet' => $pet]);
        return $pet;
    }
}
