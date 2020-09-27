<?php

namespace App\Http\Controllers;

use App\Models\raca;
use Illuminate\Http\Request;

class RacaRemoverController extends Controller
{
    public function remover(Request $request){
        $raca = raca::find($request->id);
        $raca->raca::delete();
        return redirect("/listar/racas");
    }
}
