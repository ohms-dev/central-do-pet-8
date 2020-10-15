<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run()
    {

        $dados = \App\Models\User::factory()->createAdmin();
        \App\Models\User::create($dados);
        \App\Models\User::factory()->count(10)->create();
    }
}
