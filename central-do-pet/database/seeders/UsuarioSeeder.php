<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{

    public function run()
    {
        \App\Models\usuario::factory()->count(5)->create();
    }
}
