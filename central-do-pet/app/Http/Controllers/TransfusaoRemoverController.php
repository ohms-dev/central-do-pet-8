<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transfusao;

class TransfusaoRemoverController extends Controller{

    public function remover(Request $request){
        $transfusao = transfusao::find($request->id);
        $transfusao->delete();
        return redirect("/listar/transfusaos");
    }
}
