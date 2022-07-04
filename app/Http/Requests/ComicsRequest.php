<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicsRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'type' => 'required|min:3|max:255',
            'image' => 'required|min:3|max:255'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Inserisci il titolo',
            'title.min' => 'La lunghezza deve essere superiore a :min',
            'title.max' => 'La lunghezza deve essere inferiore a :max',
            'type.required' => 'Inserisci il tipo',
            'type.min' => 'La lunghezza deve essere superiore a :min',
            'type.max' => 'La lunghezza deve essere inferiore a :max',
            'image.required' => "Inserisci l'immagine",
            'image.min' => 'La lunghezza deve essere superiore a :min',
            'image.max' => 'La lunghezza deve essere inferiore a :max'
        ];
    }
}