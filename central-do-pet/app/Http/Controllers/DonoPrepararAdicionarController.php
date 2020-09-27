<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonoPrepararAdicionarController extends Controller
{
    public function prepararAdicionar(){
        return view('Dono/adicionarDono');
    }}
