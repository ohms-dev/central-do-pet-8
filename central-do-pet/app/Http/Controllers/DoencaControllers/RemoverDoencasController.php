<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemoverDoencasController extends Controller
{
    public function remover(Request $request){
        $doenca = \App\Models\doenca::find($request->id);
        $doenca->delete();
        return redirect("/listar/doencas");
    }
}
