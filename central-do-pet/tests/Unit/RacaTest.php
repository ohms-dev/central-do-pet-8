<?php

namespace Tests\Unit;

use \App\Validator\racaValidator;
use \App\Models\raca;
use Tests\TestCase;

class RacaTest extends TestCase{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testracaSemPetId(){
        $this->expectException(\App\Validator\ValidationException::class);
        $raca = raca::factory()->make();
        $raca->pet_id= "";
        (new racaValidator)->validate($raca->toArray());
    }

    public function testracaSaveInDatabase(){
        $raca = \App\Models\raca::factory()->make();
        (new \App\Validator\racaValidator)->validate($raca->toArray());
        \App\Models\raca::factory()->create($raca->toArray());
        $this->assertDatabaseHas('racas',$raca->toArray());
    }

    public function testracaNotSaveInDatabase(){
        $raca = \App\Models\raca::factory()->make();
        \App\Models\raca::factory()->create($raca->toArray());
        $this->assertDatabaseHas('racas',$raca->toArray());
    }

}
