<?php

namespace Database\Factories;

use App\Models\dono;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class donoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\dono::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ids = DB::table('pets')->first();
        $gender = $this->faker->randomElement(["masculino", "feminino", "nao binario"]);
        return [
            "pet_id"=>$ids->id,
            "nome"=>$this->faker->firstName,
            "cpf"=>Str::random(11),
            "endereco"=>$this->faker->address,
            'contato' => Str::random(11),
            "sexo"=>$gender,
            "email"=>$this->faker->email,
            "data_de_nascimento"=>$this->faker->date(),
        ];
    }
}
