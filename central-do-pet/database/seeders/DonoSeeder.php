<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = DB::table('pets')->first();
        for($i=0;$i<5;$i++)
            DB::table('donos')->insert(["nome"=>Str::random(10),
                "pet_id"=>$ids->id,
                "cpf"=>mt_rand(1,9),
                "endereco"=>Str::random(10),
                "contato"=>mt_rand(1,20),
                "email"=>Str::random(5),
                "sexo"=>Str::random(10),
                "data_de_nascimento"=>Date::today(),
            ]);
    }
}
