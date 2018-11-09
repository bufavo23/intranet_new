<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BasicRequest extends FormRequest
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
            'name'          => 'required|min:3|max:120',
            'description'   => 'required|min:3|max:120'
        ];
    }
    public function messages()
    {
        return [
        'name.required'         => 'Favor Ingresar Nombre',
        'name.min'              => 'El nombre debe tener como mínimo 3 Caracteres',
        'name.max'              => 'El nombre debe tener como maximo 120 Caracteres',
        'description.required'  => 'Favor Ingresar descripcion',
        'description.min'       => 'La Descripcion debe tener como mínimo 3 Caracteres',
        'description.max'       => 'La Descripcion debe tener como maximo 120 Caracteres'
        ];
    }
}
