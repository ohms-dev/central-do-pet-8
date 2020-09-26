<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarDoencasController extends Controller
{
    public function editar(Request $request){
        $doenca = \App\Models\doenca::find($request->id);
        return view('Doenca/editarDoencas', ['doenca' => $doenca]);
    }

}
