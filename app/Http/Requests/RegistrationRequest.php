<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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

            'name' => 'required',
            'lastName' => 'required',
            'PESEL' => 'required|max:11|min:11',
            'ZIPcode' => 'required',
            'city' => 'required',
            'street' => 'required',
            'buildingNumber' => 'required',
            'phoneNumber' => 'required|max:9|min:9',

        ];
    }
        public function messages()
    {
        return [
            'name.required' =>'Pole "imie" jest wymagane',
            'lastName.required' => 'Pole "nazwisko" jest wymagane',
            'PESEL.max' => 'Pole "numer telefonu" musi mieć 11 cyfr',
            'PESEL.min' => 'Pole "numer telefonu" musi mieć 11 cyfr',
            'ZIPcode.required' => 'Pole "numer dowodu osobistego" jest wymagane',
            'city.required' => 'Pole "miasto" jest wymagane',
            'street.required' => 'Pole "ulica" jest wymagane',
            'buildingNumber.required' => 'Pole "numer budynku" jest wymagane',
            'phoneNumber.required' => 'Pole "numer telefonu" jest wymagane',
            'phoneNumber.max' => 'Pole "numer telefonu" musi mieć 9 cyfr',
            'phoneNumber.min' => 'Pole "numer telefonu" musi mieć 9 cyfr'

        ];
    }
}
