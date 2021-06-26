<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class ConsultaRequest extends FormRequest
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
            'descricao' => 'required|min:4|max:30',
            'data' => 'required|after:now',
            'hora' => 'required|after: 06:59:59| before: 19:00:01',
            'especializacao_id' => 'required'
        ];
    }

    public function messages(){
        return[
            'descricao.required' => 'A descrição preicsa ser preenchida',
            'descricao.min' => 'A descricao precisa ter pelo menos :min letras',
            'descricao.max' => 'A descricao precisa ter no máximo :max letras',
            'data.required' => 'A data precisa ser preenchida',
            'hora.required' => 'A hora precisa ser preenchida',
            'data.after' => 'A data na Consulta não pode ser no passado',
            'hora.after' => 'A hora da consulta deve ser entre as 07:00 e às 19:00 horas',
            'hora.before' => 'A hora da consulta deve ser entre as 07:00 e às 19:00 horas',
            'especializacao_id.required' => 'A especilização precisa ser escolhida'
        ];
    }
}
