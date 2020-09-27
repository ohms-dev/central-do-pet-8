<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Boolean;


class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<5;$i++)
            DB::table('pets')->insert(["nome"=>Str::random(10),
                "sexo"=>Str::random(5),
                "castrado"=>true,
                "necessidades_especiais"=>Str::random(10),
                "data_de_nascimento"=>Date::today(),
            ]);
    }
}
