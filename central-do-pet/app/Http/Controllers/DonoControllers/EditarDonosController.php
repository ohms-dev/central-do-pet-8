<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarDonosController extends Controller
{
    public function editar(Request $request) {
        $dono = \App\Models\dono::find($request->id);
        return redirect('Dono/atualizarDono', ['dono' => $dono]);
    }}
