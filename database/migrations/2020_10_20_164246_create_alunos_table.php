<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();

            // Criando os campos da tabela no banco de dados
            // $table->tipo_do_campo('nome_do_campo', 'tamanho_do campo')
            $table->string('nome_aluno', 128);
            $table->date('data_nascimento');
            $table->enum('sexo', ['M', 'F']);
            $table->string('email', 128)->unique();
            $table->string('escolaridade', 128);

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
        Schema::dropIfExists('alunos');
    }
}
