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
            'name'              => 'required|max:128',
            'last_name_f'       => 'required|max:128', 
            'last_name_m'       => 'required|max:128', 
            'rut'               => 'required', 
            'contact'           => 'required|max:128', 
            'phone'             => 'required|max:128', 
            'email'             => 'required|email|max:128', 
            'giro'              => 'required|max:250', 
            'address'           => 'required|max:250', 
            'comuna'            => 'required|max:250', 
            'city'              => 'required|max:250', 
            'country'           => 'required|max:250', 
            'tipo_cliente'      => 'in:PARTICULAR,EMPRESA,EXTRANJERO', 
        ];
    }
    public function messages()
    {
        return [
        'name.required'             => 'Favor Ingresar Nombre',
        'name.max'                  => 'El nombre debe tener como maximo 120 Caracteres',
        'last_name_f.required'      => 'Favor Ingresar Apellido Paterno',
        'last_name_f.max'           => 'Apellido Paterno debe tener como maximo 120 Caracteres',
        'last_name_m.required'      => 'Favor Ingresar Apellido Materno',
        'last_name_m.max'           => 'Apellido Materno debe tener como maximo 120 Caracteres',
        'rut.required'              => 'Favor Ingresar Rut',
        'contact.required'          => 'Favor Ingresar Contacto',
        'contact.max'               => 'El nombre debe tener como maximo 120 Caracteres',
        'phone.required'            => 'Favor Ingresar Telefono',
        'phone.max'                 => 'Telefono debe tener como maximo 120 Caracteres',
        'email.required'            => 'Favor Ingresar Email',
        'email.max'                 => 'Email debe tener como maximo 120 Caracteres',
        'email.email'               => 'El Email no tiene un formato valido ej pepito@tie.cl',
        'giro.required'             => 'Favor Ingresar giro',
        'giro.max'                  => 'El giro debe tener como maximo 120 Caracteres',
        'address.required'          => 'Favor Ingresar Direccion',
        'address.max'               => 'El Direccion debe tener como maximo 120 Caracteres',
        'comuna.required'           => 'Favor Ingresar Comuna',
        'comuna.max'                => 'El Comuna debe tener como maximo 120 Caracteres',
        'city.required'             => 'Favor Ingresar Ciudad',
        'city.max'                  => 'El Ciudad debe tener como maximo 120 Caracteres',
        'country.required'          => 'Favor Ingresar Pais',
        'country.max'               => 'El Pais debe tener como maximo 120 Caracteres',
        'tipo_cliente.in'           => 'Seleccione Tipo Cliente',
        ];
    }
}
