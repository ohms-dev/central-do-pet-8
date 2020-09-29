<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetRemoverController extends Controller
{
    public function remover(Request $request){
        $pet = \App\Models\pet::find($request->id);
        $pet->delete();
        return redirect("/listar/pets");
    }
}
