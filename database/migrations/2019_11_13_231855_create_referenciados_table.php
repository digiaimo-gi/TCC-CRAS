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
            $table->date('data_nascimento'); //ou string?
            $table->string('assistente_social');
            $table->string('status');
            $table->string('frequencia_cb');
            $table->string('rg');
            $table->string('cpf');
            $table->string('nis');
            $table->date('data_inclusao');
            $table->date('data_inclusao_paif');
            $table->date('data_exclusao_paif');
            $table->string('observacoes');
            $table->date('data_modificacao');
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
