<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DonoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testListarDonoNaoLogado(){
        $response = $this
            ->get('listar/donos')
            ->assertRedirect('login')
            ->assertStatus(302);
    }
}
