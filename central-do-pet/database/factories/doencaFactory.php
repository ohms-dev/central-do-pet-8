<?php

namespace Database\Factories;

use App\Models\doenca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class doencaFactory extends Factory{

    protected $model = doenca::class;

    public function definition(){
        $ids = DB::table('historicos')->first();
        return [
            "historico_id"=> $ids->id,
            "doenca"=> $this->faker->streetName,
            "data"=> $this->faker->date()
        ];
    }
}
