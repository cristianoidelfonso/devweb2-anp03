<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curso::create(
            [
                'nome_curso'=>'Jakarta EE',
                'carga_horaria'=>'200',
                'descricao'=>'Curso completo de Jakarta EE',
                'valor'=>'139.49',
                'created_at'=>'2020-10-19',
                'updated_at'=>'2020-10-19'
            ]);

            Curso::create(
            [
                'nome_curso'=>'Laravel 8',
                'carga_horaria'=>'80',
                'descricao'=>'Curso completo de Laravel 8',
                'valor'=>'1250.00',
                'created_at'=>'2020-10-19',
                'updated_at'=>'2020-10-19'
            ]);
    }
}
