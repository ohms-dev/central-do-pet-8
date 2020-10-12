<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
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
        $user = DB::table('users')->first();
        $especie = $this->faker->randomElement(["cachorro","gato","coelho","tartaruga","passaro","outro"]);
        return [
            'rga'=>\App\Http\Controllers\PetAdicionarController::gerarPetRga(),
            'nome'=>$this->faker->firstName,
            'raca'=>$especie,
            'sexo'=>$gender,
            'castrado'=>$this->faker->boolean,
            'necessidades_especiais'=>$this->faker->word,
            'data_de_nascimento'=>$this->faker->date(),
            'dono_id'=>null,
            'adotado'=>$this->faker->boolean,
            'registro'=>$user->id,
            'image'=> $this->faker->image('public/fotos/pets', 400, 300, 'animals', false) ,
        ];
    }
}
