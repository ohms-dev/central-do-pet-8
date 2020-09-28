<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

	    $table->char('nome',255);
	    $table->char('contato',11);
	    $table->char('endereco',255);
	    $table->char('senha',9);
	    $table->char('funcao',50);
	    $table->char('email',50);
	    $table->char('sexo',20);
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
        Schema::dropIfExists('usuarios');
    }
}
