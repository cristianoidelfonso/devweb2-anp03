<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome_aluno','data_nascimento','sexo','email','escolaridade'];

    // Definindo relacionamento 1 para 1
    public function matricula(){

        return $this->hasOne('App\Models\Matricula', 'aluno_id');
    }
}
