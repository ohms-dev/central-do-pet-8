<?php

namespace Tests\Unit;

use App\Models\doenca;
use App\Validator\doencaValidator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\WithFaker;

class DoencaTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserSemNome(){
        $this->expectException(\App\Validator\ValidationException::class);
        $doenca = doenca::factory()->make();
        $doenca->doenca = "";

        (new \App\Validator\doencaValidator)->validate($doenca->toArray());
    }


}
