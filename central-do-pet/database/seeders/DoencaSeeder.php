<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DoencaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 5; $i++)
            DB::table('doencas')->insert(["historico_id"=>int_random(),
                                          ""
                                        ]);
    }
}
