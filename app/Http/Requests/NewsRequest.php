<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title'         => 'required|min:3|max:250',
            'subtitle'      => 'required|min:3|max:250',
            'news'          => 'required',
            'type'          => 'required|not_in:0',
            'provider_id'   => 'required|not_in:0',
        ];
    }
    public function messages()
    {
        return [
        'title.required'         => 'Favor Ingresar titulo',
        'title.min'              => 'El titulo debe tener como mínimo 3 Caracteres',
        'title.max'              => 'El titulo debe tener como maximo 120 Caracteres',
        'subtitle.required'      => 'Favor Ingresar Subtitulo',
        'subtitle.min'           => 'El Subtitulo debe tener como mínimo 3 Caracteres',
        'subtitle.max'           => 'El Subtitulo debe tener como maximo 120 Caracteres',
        'news.required'          => 'Favor Ingresar Noticia',
        'type.required'          => 'Favor Selecciones Tipo',
        'type.not_in'            => 'Favor Selecciones un tipo de la lista',
        'provider_id.required'   => 'Favor Seleccione Proveedor',
        'provider_id.not_in'     => 'Favor Selecciones un Proveedor de la lista',
        ];
    }
}
