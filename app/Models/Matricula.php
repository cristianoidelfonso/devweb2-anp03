<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable = ['aluno_id','professor_id','curso_id'];

    // Matricula 'tem um' aluno
    public function aluno(){
        return $this->hasOne('App\Models\Aluno');
    }

    // Matricula 'tem um' professor
    public function professor(){
        return $this->hasOne('App\Models\Professor');
    }

    // Matricula 'tem um' curso
    public function curso(){
        return $this->hasOne('App\Models\Curso');
    }

}
