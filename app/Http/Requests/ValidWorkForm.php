<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidWorkForm extends FormRequest
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
            'title'         => 'required|min:3|max:30',
            'description'   => 'required|min:10|max:100',
            'image'         => 'mimes:jpeg,jpg,png|dimensions:min_width=400,min_height=400|file|max:1000',
            'status'        => 'required',
        ];
    }
    public function messages()
    {
        return [

            'title.required' => 'El :attribute es obligatorio.',
            'title.min' => 'El :attribute debe contener minimo de 3 caracteres.',
            'title.max' => 'El :attribute debe contener maximo 30 caracteres.',

            'description.required' => 'El :attribute es obligatorio.',
            'description.min' => 'El :attribute debe contener minimo de 10 caracteres.',
            'description.max' => 'El :attribute debe contener maximo 100 caracteres.',

            'image.mimes' => 'La :attribute es obligatoria.',
            'image.dimensions' => 'La :attribute debe de tener 350px de ancho y 415px de alto.',
            'image.size' => 'La :attribute no debe pesar mas de 1Mb.',

            'status.required' => 'El :attribute es obligatorio.',

        ];
    }
    public function attributes()
    {
        return [
            'title'         => 'Título',
            'description'   => 'Descripción',
            'image'         => 'Imagen',
            'status'        => 'Estado',
        ];
    }
}
