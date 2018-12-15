<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            'name'                  => 'required|max:250',
            'prefix'                => 'required',
            'code_iata'             => 'required',
            'description'           => 'required|max:250',
            'fee_basic'             => 'required',
            'fee_bussinnes'         => 'required',
            'file'                  => 'required|file',
            'activo'                => 'required|not_in:0',
            'type_provider_id'      => 'required|not_in:0',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required'             => 'Favor Ingresar Nombre',
            'name.max'                  => 'El nombre debe tener como maximo 250 Caracteres',
            'prefix.required'           => 'Favor Ingresar Prefijo',
            'code_iata.required'        => 'Favor Ingresar Codigo Iata',
            'description.required'      => 'Favor Ingresar Descripcion',
            'fee_basic.required'        => 'Favor Ingresar Fee Basico',
            'fee_bussinnes.required'    => 'Favor Ingresar Fee Bussinnes',
            'file.file'                 => 'Favor Ingresar Archivo',
            'file.required'             => 'Favor Ingresar Archivo',
            'activo.required'           => 'Seleccione Estado',
            'activo.not_in'             => 'Seleccione Estado',
            'type_provider_id.required' => 'Seleccione Tipo de proveedor',
            'type_provider_id.not_in'   => 'Seleccione Tipo de proveedor',
        ];
    }
}
