<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition(){

        $gender = $this->faker->randomElement(['Masculino', 'Feminino', "Não Binário", "Outro", "Não informar"]);
        $funcao = $this->faker->randomElement(['Médico veterinário', 'Funcionário', 'ONG', 'Tutor']);
        $idUser = User::all()->pluck('id')->last();
        $email = $idUser.'teste@gmail.com';

        return [
            'name' => $this->faker->name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password, // password
            'remember_token' => Str::random(10),
            'sexo'=> $gender,
            'endereco' => $this->faker->address,
            'contato' => Str::random(11),
            'funcao' => $funcao,
            'data_de_nascimento' => $this->faker->date(),
        ];
    }

    public function createAdmin(){

        return [
            'name' => 'Administrador',
            'email' => 'emailteste@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password, // password
            'remember_token' => Str::random(10),
            'sexo'=> 'Outro',
            'endereco' => $this->faker->address,
            'contato' => '12345678910',
            'funcao' => 'Administrador',
            'data_de_nascimento' => $this->faker->date(),
        ];
    }
}
