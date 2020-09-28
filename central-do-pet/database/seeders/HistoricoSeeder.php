<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HistoricoSeeder extends Seeder
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
            DB::table('historicos')->insert(["pet_id"=>$ids->id,
                "alergias"=>Str::random(10),
            ]);
    }
}
