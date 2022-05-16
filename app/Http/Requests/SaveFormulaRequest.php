<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveFormulaRequest extends FormRequest
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
            'nombre_comun' => 'required',
            'nombre_sistematico'=>'required',
            'descripcion'=>'required',
            'tipo'=>['required','exists:categorias,id'],
            'elemento_1'=>'required'
        ];
    }
}
