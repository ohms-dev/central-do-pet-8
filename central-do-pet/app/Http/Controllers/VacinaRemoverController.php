<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VacinaRemoverController extends Controller
{
    public function remover(Request $request){
        $vacina = \App\Models\vacina::find($request->id);
        $vacina->delete();
        return redirect("/listar/vacinas");
    }
}
