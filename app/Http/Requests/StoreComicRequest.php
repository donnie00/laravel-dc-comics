<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array <string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'nullable',
            'price' => 'required|number',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Manca il titolo!',
            'description.required' => 'Manca la descrizione!',
            'thumb.required' => "Manca l'immagine!",
            'price.required' => 'Manca il prezzo!',
            'series.required' => 'Manca la serie!',
            'sale_date.required' => 'Manca la data di vendita!',
            'type.required' => 'Manca il tipo!'
        ];
    }
}
