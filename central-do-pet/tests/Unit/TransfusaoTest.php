<?php

namespace Tests\Unit;

use App\Models\transfusao;
use App\Validator\transfusaoValidator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\WithFaker;

class TransfusaoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testTransfusaoSemData(){
        $this->expectException(\App\Validator\ValidationException::class);
        $t = transfusao::factory()->make();
        $t->data = '';

        (new \App\Validator\transfusaoValidator)->validate($t->toArray());
    }
}
