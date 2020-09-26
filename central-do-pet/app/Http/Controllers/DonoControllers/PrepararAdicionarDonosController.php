<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepararAdicionarDonosController extends Controller
{
    public function prepararAdicionar(){
        return view('Dono/adicionarDono');
    }}
