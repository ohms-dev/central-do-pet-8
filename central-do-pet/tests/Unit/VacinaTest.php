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
}
