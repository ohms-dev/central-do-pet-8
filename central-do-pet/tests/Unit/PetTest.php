<?php

namespace Tests\Unit;

use \App\Validator\petValidator;
use \App\Models\pet;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PetTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testPetSemNome(){

        $this->expectException(\App\Validator\ValidationException::class);
        $pet= pet::factory()->make();
        $pet->nome = "";
        petValidator::validate($pet->toArray());
    }

    public function testPetSemSexo(){
        $this->expectException(\App\Validator\ValidationException::class);
        $pet= pet::factory()->make();
        $pet->sexo = "";
        petValidator::validate($pet->toArray());
    }

    public function testPetCorreto(){
        $pet= pet::factory()->make();
        petValidator::validate($pet->toArray());
        $this->assertTrue(True);
    }

    public function testPetSaveInDatabase(){
        $pet = \App\Models\pet::factory()->make();
        \App\Models\pet::factory()->create($pet->toArray());
        $pets = DB::table('pets')->get();
        $this->assertDatabaseHas('pets',$pet->toArray());
    }

    public function testPetNotSaveInDatabase(){
        $pet = \App\Models\pet::factory()->make();
        $pets = DB::table('pets')->get();
        $this->assertDatabaseMissing('pets',$pet->toArray());
    }


}
