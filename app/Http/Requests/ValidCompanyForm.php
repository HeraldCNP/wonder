<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidCompanyForm extends FormRequest
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
            'name'         => 'required|min:3|max:50',
            'description'   => 'required|min:10|max:100',
            'image'         => 'required|mimes:jpeg,jpg,png|dimensions:min_width=119,min_height=83|file|max:1000',
            'contact'        => 'required|min:7|max:12',
            'status'        => 'required',
        ];
    }
    public function messages()
    {
        return [

            'name.required' => 'El :attribute es obligatorio.',
            'name.min' => 'El :attribute debe contener minimo de 3 caracteres.',
            'name.max' => 'El :attribute debe contener maximo 50 caracteres.',

            'description.required' => 'El :attribute es obligatorio.',
            'description.min' => 'El :attribute debe contener minimo de 10 caracteres.',
            'description.max' => 'El :attribute debe contener maximo 100 caracteres.',

            'image.required' => 'La :attribute es obligatoria.',
            'image.mimes' => 'La :attribute es obligatoria.',
            'image.dimensions' => 'La :attribute debe de tener 350px de ancho y 415px de alto.',
            'image.size' => 'La :attribute no debe pesar mas de 1Mb.',

            'contact.required' => 'El :attribute es obligatorio.',
            'contact.min' => 'El :attribute debe contener minimo de 7 caracteres.',
            'contact.max' => 'El :attribute debe contener maximo 12 caracteres.',

            'web.url' => 'La :attribute debe ser una URL ej. (https://www.wondergroup.com.bo)',

            'status.required' => 'El :attribute es obligatorio.',

        ];
    }
    public function attributes()
    {
        return [
            'name'         => 'Nombre',
            'description'   => 'Descripción',
            'image'         => 'Imagen',
            'contact'         => 'Telefono de Contacto',
            'web'         => 'Página Web',
            'status'        => 'Estado',
        ];
    }
}
