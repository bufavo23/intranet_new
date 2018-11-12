<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name'              => 'required|min:3|max:128',
            'last_name_f'       => 'required|min:3|max:128', 
            'last_name_m'       => 'required|min:3|max:128', 
            'rut'               => 'required', 
            'contact'           => 'required|min:3|max:128', 
            'phone'             => 'required|min:3|max:128', 
            'email'             => 'required|email|min:3|max:128', 
            'giro'              => 'required|min:3|max:250', 
            'address'           => 'required|min:3|max:250', 
            'comuna'            => 'required|min:3|max:250', 
            'city'              => 'required|min:3|max:250', 
            'country'           => 'required|min:3|max:250', 
            'tipo_cliente.*'    => 'required', 
        ];
    }
    public function messages()
    {
        return [
        'name.required'         => 'Favor Ingresar Nombre',
        'name.min'              => 'El nombre debe tener como mínimo 3 Caracteres',
        'name.max'              => 'El nombre debe tener como maximo 120 Caracteres',
        ];
    }
}
