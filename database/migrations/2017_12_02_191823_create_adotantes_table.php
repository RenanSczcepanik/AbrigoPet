<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdotantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adotantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('fone_fixo');
            $table->string('fone_celular');
            $table->string('email')->unique();
            $table->string('rua');
            $table->string('numero');
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
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
        Schema::dropIfExists('adotantes');
    }
}
