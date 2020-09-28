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
	    $table->char('cpf',11);
	    $table->char('nome',255);
	    $table->char('contato',11);
	    $table->char('endereco',255);
	    $table->char('sexo',50);
	    $table->char('email',50);
	    $table->date('data_de_nascimento');
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
