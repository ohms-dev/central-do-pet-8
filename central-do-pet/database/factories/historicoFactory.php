<?php

namespace Database\Factories;

use App\Models\historico;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class historicoFactory extends Factory{
    protected $model = historico::class;

    public function definition(){
        $ids = DB::table('pets')->first();
        return [
            "pet_id"=>$ids->id,
            "alergias"=> $this->faker->monthName
        ];
    }
}
