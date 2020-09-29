<?php

namespace Tests\Unit;

use \App\Validator\historicoValidator;
use \App\Models\historico;
use Tests\TestCase;

class HistoricoTest extends TestCase{

    /**
     * A basic unit test example.
     *
     * @return void
    */
    public function testHistoricoSemPetId(){
        $this->expectException(\App\Validator\ValidationException::class);
        $historico = historico::factory()->make();
        $historico->pet_id= "";
        (new historicoValidator)->validate($historico->toArray());
    }

    public function testHistoricoSaveInDatabase(){
        $historico = \App\Models\historico::factory()->make();
        (new \App\Validator\historicoValidator)->validate($historico->toArray());
        \App\Models\historico::factory()->create($historico->toArray());
        $this->assertDatabaseHas('historicos',$historico->toArray());
    }

    public function testHistoricoNotSaveInDatabase(){
        $historico = \App\Models\historico::factory()->make();
        \App\Models\historico::factory()->create($historico->toArray());
        $this->assertDatabaseHas('historicos',$historico->toArray());
    }

}
