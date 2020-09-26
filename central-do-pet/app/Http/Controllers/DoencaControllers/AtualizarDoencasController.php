<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtualizarDoencasController extends Controller
{
    public function atualizar(Request $request){
        $doenca = \App\Models\doenca::find($request->id);
        $doenca->doenca = $request->doenca;
        $doenca->historico_id = $request->historico_id;
        $doenca->data = $request->data;
        $doenca->update();
        return redirect("/listar/doencas");
    }
}
