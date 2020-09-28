<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonoRemoverController extends Controller
{
    public function remover(Request $request){
        $dono = \App\Models\dono::find($request->id);
        $dono->delete();
        return redirect("/listar/donos");
    }}
