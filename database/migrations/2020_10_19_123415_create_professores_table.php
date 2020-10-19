<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->id();

            // Criando os campos da tabela no banco de dados
            // $table->tipo_do_campo('nome_do_campo', 'tamanho_do campo')
            $table->string('nome_professor', 128)->unique();
            $table->string('formacao', 250);
            $table->string('email', 128)->unique();

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
        Schema::dropIfExists('professores');
    }
}
