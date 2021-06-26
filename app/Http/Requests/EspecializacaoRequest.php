<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspecializacaoRequest extends FormRequest
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
            'descricao' => 'required|max:30|min:4',
        ];
    }

    public function messages(){
        return[
            'descricao.required' => 'A descrição preicsa ser preenchida',
            'descricao.min' => 'A descricao precisa ter pelo menos :min letras',
            'descricao.max' => 'A descricao precisa ter no máximo :max letras'
        ];
    }
}
