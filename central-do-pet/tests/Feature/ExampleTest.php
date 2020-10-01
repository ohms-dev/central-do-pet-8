<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
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
    public function testCadastroUserPositivo(){
        $response = $this
            ->get('adicionar/user')
            ->assertStatus(302);
    }
}
