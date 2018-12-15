<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'slug'          => 'required|min:3|max:120',
            'description'   => 'required',

        ];
    }
    public function messages()
    {
        return [
        'name.required'         => 'Favor Ingresar Nombre',
        'name.min'              => 'El nombre debe tener como mínimo 3 Caracteres',
        'name.max'              => 'El nombre debe tener como maximo 120 Caracteres',
        'slug.required'         => 'Favor Ingresar URL',
        'slug.min'              => 'URL debe tener como mínimo 3 Caracteres',
        'slug.max'              => 'URL debe tener como maximo 120 Caracteres',
        'description.required'  => 'Favor Ingresar URL',
        ];
    }
}
