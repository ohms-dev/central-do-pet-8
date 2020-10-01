<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HistoricoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListarHistoricoNaoLogado(){
        $response = $this
            ->get('listar/historicos')
            ->assertRedirect('login')
            ->assertStatus(302);
    }
}
