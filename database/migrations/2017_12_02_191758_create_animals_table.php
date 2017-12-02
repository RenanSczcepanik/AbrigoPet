<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('rga');
            $table->datetime('dt_nascimento');
            $table->datetime('dt_resgate');
            $table->string('aprox_idade');
            $table->char('genero');
            $table->string('tipo_deficiencia');
            $table->boolean('vacinado');
            $table->boolean('castrado');
            $table->double('tamanho');
            $table->double('peso');
            $table->string('temperamento');
            $table->string('obs');
            $table->integer('id_raca')->unsigned();
            $table->foreign('id_raca')->references('id')->on('racas')->onDelete('cascade');
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
        Schema::dropIfExists('animals');
    }
}
