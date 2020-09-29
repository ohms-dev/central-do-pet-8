<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HistoricoSeeder extends Seeder
{

    public function run()
    {
        \App\Models\historico::factory()->count(5)->create();
    }
}
