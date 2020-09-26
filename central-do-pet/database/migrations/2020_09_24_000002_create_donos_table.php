<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

	    $table->integer('pet_id');
	    $table->foreign('pet_id')->references('id')->on('pets')->onDelete('cascade');
	    $table->integer('cpf');
	    $table->string('nome');
	    $table->integer('contato');
	    $table->string('endereco');
	    $table->string('sexo');
	    $table->string('email');
	    $table->date('data de nascimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donos');
    }
}
