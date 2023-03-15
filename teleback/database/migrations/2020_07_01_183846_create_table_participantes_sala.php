<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParticipantesSala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes_sala', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sala_id');
            $table->string('chave_sala');
            $table->integer('paciente_id')->nullable(true);
            $table->integer('profissional_id')->nullable(true);
            $table->integer('usuario_id')->nullable(true);
            $table->string('nome_comprovante')->nullable(true);
            $table->string('valor_comprovante')->nullable(true);
            $table->date('data_nascimento')->nullable(true);
            $table->string('chave')->nullable(true);
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
        Schema::dropIfExists('participantes_sala');
    }
}
