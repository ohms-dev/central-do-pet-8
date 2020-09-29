<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\pet;

class CadastrarPetTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return array
     */
    public function inicializarArrayPets() {
        $pet = pet::factory()
            ->make();
        $dados = $pet->toArray();
        return $dados;
    }
    public function testCadastroPetPositivo(){
        $response = $this
            ->get('adicionar/pet')
            ->assertStatus(200);
    }
}
