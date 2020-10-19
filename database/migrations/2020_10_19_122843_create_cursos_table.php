<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {

            $table->id(); //criar a chave primaria chamada 'id'

            // Criando os campos da tabela no banco de dados
            // $table->tipo_do_campo('nome_do_campo', 'tamanho_do campo')
            $table->string('nome_curso', 128)->unique();
            $table->integer('carga_horaria');
            $table->text('descricao');
            $table->decimal('valor', 8, 2);

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
        Schema::dropIfExists('cursos');
    }
}
