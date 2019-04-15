<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkersRequest extends FormRequest
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
            'function' => 'required',
            'earnings' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'name.required' =>'Pole "imie" jest wymagane',
            'lastName.required' => 'Pole "nazwisko" jest wymagane',
            'function.required' => 'Pole "stanowisko" jest wymagane',
            'earnings.required' => 'Pole "zarobki" jest wymagane',

        ];
    }

}
