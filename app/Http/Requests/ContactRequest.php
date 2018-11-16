<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email'         => 'required|min:3|max:120',
            'phone'         => 'required|min:3|max:120',
            'cell_phone'    => 'required|min:3|max:120',
            'section'       => 'required|min:3|max:120',
            'provider_id'   => 'required',
        ];
    }
    public function messages()
    {
        return [
        'name.required'         => 'Favor Ingresar Nombre',
        'name.min'              => 'El nombre debe tener como mínimo 3 Caracteres',
        'name.max'              => 'El nombre debe tener como maximo 120 Caracteres',
        'email.required'        => 'Favor Ingresar Email',
        'email.min'             => 'El Email debe tener como mínimo 3 Caracteres',
        'email.max'             => 'El Email debe tener como maximo 120 Caracteres',
        'phone.required'        => 'Favor Ingresar Telefono',
        'phone.min'             => 'El Telefono debe tener como mínimo 3 Caracteres',
        'phone.max'             => 'El Telefono debe tener como maximo 120 Caracteres',
        'cell_phone.required'   => 'Favor Ingresar Celular',
        'cell_phone.min'        => 'El Celular debe tener como mínimo 3 Caracteres',
        'cell_phone.max'        => 'El Celular debe tener como maximo 120 Caracteres',
        'section.required'      => 'Favor Ingresar Seccion',
        'section.min'           => 'El Seccion debe tener como mínimo 3 Caracteres',
        'section.max'           => 'El Seccion debe tener como maximo 120 Caracteres',
        'provider_id.required'  => 'Favor Seleccionar un proveedor',
        ];
    }
}
