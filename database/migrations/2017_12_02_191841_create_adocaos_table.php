<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdocaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adocaos', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('dt_adocao');
            $table->datetime('dt_devolucao')->nullable();
            $table->boolean('adocao')->nullable();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->integer('id_adotante')->unsigned();
            $table->foreign('id_adotante')->references('id')->on('adotantes')->onDelete('cascade');
            $table->integer('id_animal')->unsigned();
            $table->foreign('id_animal')->references('id')->on('animals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adocaos');
    }
}
