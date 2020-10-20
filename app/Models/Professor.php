<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';
    // protected $primarykey = 'id_professor'; // Exemplo para campo id diferente do termo 'id'

    protected $fillable = ['nome_professor','formacao','email'];
}
