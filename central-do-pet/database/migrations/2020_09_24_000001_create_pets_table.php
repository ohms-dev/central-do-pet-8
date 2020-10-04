<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

        $table->integer('rga');
        $table->char('nome',255);
	    $table->char('sexo',20);
	    $table->char('castrado',10);
	    $table->char('necessidades_especiais',255);
	    $table->date('data_de_nascimento');
	    $table->integer('dono_id')->nullable(true);
	    $table->foreign('dono_id')->references('id')->on('users')->onDelete('cascade');
      $table->char('adotado',10)->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
