<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallRequest extends FormRequest
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
            'name' => 'required|min:3|max:120',
            'phone'   => 'required|min:3|max:120',
            'date_call' => 'required|min:3|max:120',
            'user_id' => 'required|not_in:0'
        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'Favor Ingresar Nombre',
            'name.min' => 'El nombre debe tener como mínimo 3 Caracteres',
            'name.max' => 'El nombre debe tener como maximo 120 Caracteres',
            'phone.required' => 'Favor Ingresar Telefono',
            'phone.min' => 'La Descripcion debe tener como mínimo 3 Caracteres',
            'phone.max' => 'La Descripcion debe tener como maximo 120 Caracteres',
            'date_call.required' => 'Favor Seleccionar Fecha',
            'user_id.required' => 'Favor Ingresar Nombre'
        ];
    }
}
