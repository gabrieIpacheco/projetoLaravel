<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvaliacaoRequest extends FormRequest
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
            'nota' => 'required|int|min:1|max:5',
            'descricao' => 'max:300'
        ];
    }

    public function messages(){
        return[
            'nota.required' => 'A nota precisa ser preenchida',
            'nota.min' => 'A nota deve ser entre 1 e 5',
            'nota.int' => 'A nota não pode ter casas decimais',
            'nota.max' => 'A nota deve ser entre 1 e 5',
            'descricao.max' => 'A descrição não pode ter mais de :max caracteres',
            
        ];
    }
}
