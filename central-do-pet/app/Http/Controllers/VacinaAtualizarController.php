<?php

namespace App\Http\Controllers;

use App\Models\vacina;
use Illuminate\Http\Request;

class VacinaAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $vacina = vacina::find($request->id);
        $vacina->historico_id = $request->historico_id;
        $vacina->vacina = $request->vacina;
        $vacina->data = $request->data;
        $vacina->update();
        return redirect("listar/vacinas");
    }
}
