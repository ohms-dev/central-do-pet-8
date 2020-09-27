<?php

namespace App\Http\Controllers\DonoControllers;
use Illuminate\Http\Request;

class DonoListarController extends  Illuminate\Routing\Controller
{
    public function listar() {
        $donos = \App\Models\dono::all();
        return view('Dono/listaDonos', ['donos' => $donos]);
    }
}
