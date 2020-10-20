<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       return [
            'nome_aluno' => 'bail|required|min:5|max:128|',
            'data_nascimento' => 'required',
            'sexo' => 'required',
            'email' => 'required',
            'escolaridade' => 'required',

        ];
    }
}
