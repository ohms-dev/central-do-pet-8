<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PetSeeder::class);
        $this->call(RacaSeeder::class);
        $this->call(HistoricoSeeder::class);
        $this->call(DoencaSeeder::class);
        $this->call(VacinaSeeder::class);
        $this->call(TransfusaoSeeder::class);
    }
}
