<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome_aluno','data_nascimento','sexo','email','escolaridade'];


    public function matricula(){

        return $this->belongsTo('App\Models\Matricula');

    }
}
