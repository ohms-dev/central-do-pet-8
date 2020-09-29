<?php

namespace Tests\Unit;

use \App\Validator\donoValidator;
use \App\Models\dono;
use Tests\TestCase;

class DonoTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDonoSemPetId(){
        $this->expectException(\App\Validator\ValidationException::class);
        $dono = dono::factory()->make();
        $dono->pet_id = "";
        (new donoValidator)->validate($dono->toArray());
    }

    public function testDonoSaveInDatabase(){
        $dono = dono::factory()->make();
        foreach ($dono->toArray() as $i)
            print($i.' ');
        (new donoValidator)->validate($dono->toArray());
        dono::factory()->create($dono->toArray());
        $this->assertDatabaseHas('donos', $dono->toArray());
    }

    public function testDonoNotSaveInDatabase(){
        $dono = dono::factory()->make();
        dono::factory()->create($dono->toArray());
        $this->assertDatabaseHas('donos', $dono->toArray());
    }

}
