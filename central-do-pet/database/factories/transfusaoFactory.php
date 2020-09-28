<?php

namespace Database\Factories;

use App\Models\transfusao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class transfusaoFactory extends Factory{

    protected $model = transfusao::class;

    public function definition(){
        $ids = DB::table('historicos')->first();

        return [
            "historico_id"=>$ids->id,
            'data' => $this->faker->date(),
        ];
    }
}
