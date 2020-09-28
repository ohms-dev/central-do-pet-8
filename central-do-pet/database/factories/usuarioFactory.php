<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class usuarioFactory extends Factory{
    protected $model = usuario::class;

    public function definition(){
        $gender = $this->faker->randomElement(['masculino', 'feminino', "nao binario"]);
        $funcao = $this->faker->randomElement(['medico', 'usuario']);

        return [
            'nome'=> $this->faker->firstName,
            'sexo'=> $gender,
            'endereco' => $this->faker->address,
            'contato' => $this->faker->randomDigit,
            'email' => $this->faker->email,
            'senha' => $this->faker->randomDigit,
            'funcao' => $funcao,
            'data_de_nascimento' => $this->faker->date(),
        ];
    }
}
