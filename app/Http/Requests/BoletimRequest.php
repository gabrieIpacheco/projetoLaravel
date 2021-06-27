<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BoletimRequest extends FormRequest
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
            'descricao' => 'required|min:4|max:200',
            'data_publicacao' => 'required|after:now',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'A descrição preicsa ser preenchida',
            'descricao.min' => 'A descricao precisa ter pelo menos :min letras',
            'descricao.max' => 'A descricao precisa ter no máximo :max letras',
            'data_publicacao.required' => 'A data precisa ser preenchida',
            'data_publicacao.after' => 'A data da publicacao não pode ser no passado',
        ];
    }
}
