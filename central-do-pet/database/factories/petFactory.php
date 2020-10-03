<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
     * @throws \Exception
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(["macho","femea"]);
        return [
            'rga'=>\App\Http\Controllers\PetAdicionarController::gerarPetRga(),
            'nome'=>$this->faker->firstName,
            'sexo'=>$gender,
            'castrado'=>$this->faker->boolean,
            'necessidades_especiais'=>$this->faker->word,
            'data_de_nascimento'=>$this->faker->date(),
        ];
    }
}
