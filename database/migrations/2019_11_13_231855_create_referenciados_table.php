<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferenciadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenciados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('prontuario');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('assistente_social');
            $table->string('status');
            $table->string('frequencia_cb');
            $table->string('rg');
            $table->string('cpf');
            $table->string('nis')->nullable();
            $table->date('data_inclusao');
            $table->date('data_inclusao_paif')->nullable();
            $table->date('data_exclusao_paif')->nullable();
            $table->string('observacoes')->nullable();
            $table->date('data_modificacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referenciados');
    }
}
