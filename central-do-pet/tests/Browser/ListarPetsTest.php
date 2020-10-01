<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ListarPetsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testListarPets()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/listar/pets')
                ->assertSee('Pets');
        });
    }
}
