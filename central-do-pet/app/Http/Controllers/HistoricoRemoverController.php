<?php

namespace App\Http\Controllers;

use App\Models\historico;
use Illuminate\Http\Request;

class HistoricoRemoverController extends Controller
{
    public function remover(Request $request){
        $historico = historico::find($request->id);
        $historico->delete();
        return redirect('listar/historicos');
    }
}
