<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ListarFuncionariosTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testListarFuncionarios()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/listar/funcionarios')
                ->assertSee('funcionários');
        });
    }
}
