<?php

namespace App\Http\Controllers;

use App\Models\dono;
use Illuminate\Http\Request;

class DonoController extends Controller
{
    public function listar() {
        $donos = dono::all();
        return view('listarDono', ['donos' => $donos]);
    }

    public function editar(Request $request) {
        $dono = dono::find($request->id);
        return view('editarDono', ['dono' => $dono]);
    }

}
