<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarDonosController extends Controller
{
    public function listar() {
        $donos = \App\Models\dono::all();
        return view('Dono/listaDonos', ['donos' => $donos]);
    }
}
