<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Aluno;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create(
            [
                'nome_aluno'=>'Idelfonso da Silva',
                'data_nascimento'=>'2000-02-19',
                'sexo'=>'M',
                'email'=>'idelfonso@teste.com',
                'escolaridade'=>'Médio completo',
                'created_at'=>'2020-10-19',
                'updated_at'=>'2020-10-19'
            ]);

        Aluno::create(
            [
                'nome_aluno'=>'Barbara Costa',
                'data_nascimento'=>'2006-04-08',
                'sexo'=>'F',
                'email'=>'barbar@teste.com',
                'escolaridade'=>'Médio completo',
                'created_at'=>'2020-10-19',
                'updated_at'=>'2020-10-19'
            ]);
    }
}
