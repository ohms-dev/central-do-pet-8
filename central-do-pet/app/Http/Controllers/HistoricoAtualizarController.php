<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoAtualizarController extends Controller
{
    public function atualizar(Request $request){
        $historico = historico::find($request->id);
        $historico->pet_id = $request->pet_id;
        $historico->alergias = $request->alergias;
        $historico->update();
        return redirect('listar/historicos');
    }
}
