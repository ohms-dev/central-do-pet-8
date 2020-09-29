<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class petFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\pet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(["macho","femea"]);
        return [
            'nome'=>$this->faker->firstName,
            'sexo'=>$gender,
            'castrado'=>$this->faker->boolean,
            'necessidades_especiais'=>$this->faker->word,
            'data_de_nascimento'=>$this->faker->date(),
        ];
    }
}
