<?php

namespace Tests\Unit;

use App\Models\User;
use App\Validator\UserValidator;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabaseState;
use Illuminate\Foundation\Testing\WithFaker;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserSemNome(){
        $this->expectException(\App\Validator\ValidationException::class);
        $user = User::factory()->make();
        $user->name = "";

        UserValidator::validate($user->toArray());
    }

    public function testUserDataBaseCreate(){
        $user = User::factory()->make();
        User::factory()->create($user->toArray());
        $this->assertDatabaseHas('users',$user->toArray());
    }

    public function testUserCorreto(){
        $User = User::factory()->make();
        $dados = $User->toArray();
        $dados['password'] = 'password';
        \App\Validator\UserValidator::validate($dados);
        $this->assertTrue(True);
    }
}
