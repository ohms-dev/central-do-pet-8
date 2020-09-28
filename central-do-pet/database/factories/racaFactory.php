<?php

namespace Database\Factories;

use App\Models\raca;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class racaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\raca::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ids = DB::table('pets')->first();
        $porte = $this->faker->randomElement(["pequeno","medio","grande"]);
        return [
            "pet_id"=>$ids->id,
            "especie"=>$this->faker->firstName,
            "porte"=>$porte,
            "cor"=>$this->faker->colorName,
        ];
    }
}
