<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
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
            'nome' => 'required|max:100|min:4',
            'cpf' => 'required|min:11|max:11|unique:paciente'
        ];
    }

    public function messages(){
        return[
            'nome.required' => 'O nome precisa ser preenchido',
            'nome.min' => 'O nome precisa ter pelo menos :min letras',
            'nome.max' => 'O nome não pode ter mais de :max letras',
            'cpf.required' => 'O CPF precisa ter 11 digitos',
            'cpf.min' => 'O CPF tem 11 digitos',
            'cpf.max' => 'O CPF tem 11 digitos',
            'cpf.unique' => 'Este CPF já foi cadastrado'
        ];
    }
}
