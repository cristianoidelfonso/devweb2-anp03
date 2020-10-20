<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nome_curso','carga_horaria','descricao','valor','professor_id'];

    public function matricula(){
        return $this->belongsTo('App\Models\Matricula');
    }

    public function professor(){
        return $this->belongsTo('App\Models\Professor');
    }

}
