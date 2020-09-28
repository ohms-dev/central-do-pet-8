<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++)
            DB::table('usuarios')->insert(["nome"=>Str::random(10),
                "contato"=>mt_rand(1,100),
                "endereco"=>Str::random(10),
                "senha"=>mt_rand(1,20),
                "funcao"=>Str::random(5),
                "email"=>Str::random(5),
                "sexo"=>Str::random(10),
                "data_de_nascimento"=>Date::today(),
            ]);
    }
}
