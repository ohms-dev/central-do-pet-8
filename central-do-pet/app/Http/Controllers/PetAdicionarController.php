<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetAdicionarController extends Controller
{
    public static function gerarPetRga(){
        $comRgaRange = 1000;
        $fimRgaRange = 9999;
        $pets = (new \App\Models\pet)->getSortedArrayPets();
        $rga = random_int($comRgaRange,$fimRgaRange);
        while($pets->contains($rga))
            $rga = random_int($comRgaRange,$fimRgaRange);
        return $rga;
    }

    public function adicionar(Request $request){
        try {
            \App\Validator\petValidator::validate(array_merge($request->all(), ['rga' => $this->gerarPetRga()]));
            \App\Models\pet::create(array_merge($request->all(), ['rga' => $this->gerarPetRga()]));
            return redirect('listar/pets');
        } catch (\App\Validator\ValidationException $exception){
            return redirect('adicionar/pet')
                ->withErrors($exception->getValidator())
                ->withInput();
        }
    }
}
