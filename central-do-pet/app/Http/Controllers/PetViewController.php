<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetViewController extends Controller
{
    public function view($id){
        $pet = \App\Models\pet::find($id);
        $historico = null;
        $historicos = \App\Models\historico::all();
        foreach($historicos as $temp)
            if($temp->pet_id == $pet->id)
                $historico = $temp;
        return view('Pet/viewPet',['pet' => $pet,'historico' => $historico]);
    }
}
