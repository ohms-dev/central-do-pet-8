<?php

namespace Tests\Unit;

use App\Models\vacina;
use App\Validator\vacinaValidator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\WithFaker;

class VacinaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testVacinaSemNome(){
        $this->expectException(\App\Validator\ValidationException::class);
        $vacinas = vacina::factory()->make();
        $vacinas->vacina = '';

        (new \App\Validator\vacinaValidator)->validate($vacinas->toArray());
    }

    public function testVacinaCorreto(){
        $vacina = vacina::factory()->make();
        (new \App\Validator\vacinaValidator)->validate($vacina->toArray());
        $this->assertTrue(True);
    }

    public function testVacinaDataBaseCreate(){
        $vacina = vacina::factory()->make();
        vacina::factory()->create($vacina->toArray());
        $this->assertDatabaseHas('vacinas', $vacina->toArray());
    }
}
