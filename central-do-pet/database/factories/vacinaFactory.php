<?php

namespace Database\Factories;

use App\Models\vacina;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class vacinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\vacina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ids = DB::table('historicos')->first();
        return [
            "historico_id"=> $ids->id,
            "vacina"=> $this->faker->streetName,
            "data"=> $this->faker->date()
        ];
    }
}
