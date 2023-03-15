<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('profissional_destino_id')->nullable(true);
            $table->string('nome_profissional_destino')->nullable(true);
            $table->string('apelido_profissional_destino')->nullable(true);
            $table->integer('usuario_origem_id');
            $table->string('nome_usuario_origem');
            $table->integer('paciente_destino_id')->nullable(true);
            $table->string('nome_paciente_destino')->nullable(true);
            $table->string('nomesocial_paciente_destino')->nullable(true);
            $table->integer('usuario_destino_id')->nullable(true);
            $table->string('nome_usuario_destino')->nullable(true);
            $table->string('chave')->nullable(true);
            $table->string('sala');
            $table->boolean('convidado_acessou')->default(false);
            $table->boolean('finalizada')->default(false);
            $table->dateTime('encerrada_em')->nullable(true);
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
        Schema::dropIfExists('salas');
    }
}
