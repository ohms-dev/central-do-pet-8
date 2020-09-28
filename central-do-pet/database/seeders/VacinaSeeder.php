<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VacinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ids = DB::table('historicos')->first();
        for($i=0;$i<5;$i++)
            DB::table('vacinas')->insert(["historico_id"=>$ids->id,
                "vacina"=>Str::random(10),
                "data"=>Date::today(),
            ]);
    }
}
