<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return array
     */


    public function inicializarArrayUsers() {
        $user = user::factory()
            ->make();
        $dados = $user->toArray();
        return $dados;
    }
    public function testUserNaoLogado(){
        $response = $this
            ->get('cadastrar/user')
            ->assertStatus(404);
    }

}
