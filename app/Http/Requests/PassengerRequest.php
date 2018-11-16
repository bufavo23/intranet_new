<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassengerRequest extends FormRequest
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
    public function rules() 'name', 'last_name_f', 'last_name_m', 'rut', 'pasaporte', 'birth_date', 'phone', 'email', 'address', 'comuna', 'city', 'country', 'client_id',
    {
        return [   
            'name'          => 'required',
            'last_name_f'   => 'required',
            'last_name_m'   => 'required',
            'rut'           => 'required',
            'birth_date'    => 'required',
            'phone'         => 'required',
            'email'         => 'required',
            'address'       => 'required',
            'comuna'        => 'required',
            'city'          => 'required',
            'country'       => 'required',
            'client_id'     => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Favor Ingresar Nombre',
            'last_name_f.required' => 'Favor Ingresar Apellido Paterno',
            'last_name_m.required' => 'Favor Ingresar Apellido Materno',
            'rut.required' => 'Favor Ingresar Rut',
            'birth_date.required' => 'Favor Ingresar Fecha Nacimiento',
            'phone.required' => 'Favor Ingresar Telefono',
            'email.required' => 'Favor Ingresar Email',
            'address.required' => 'Favor Ingresar Direccion',
            'comuna.required' => 'Favor Ingresar Comuna',
            'city.required' => 'Favor Ingresar Ciudad',
            'country.required' => 'Favor Ingresar Pais',
            'client_id.required' => 'Favor Ingresar Cliente',
        ];
    }
}
