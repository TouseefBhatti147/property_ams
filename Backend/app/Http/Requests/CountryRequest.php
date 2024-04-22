<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'country' => 'required|max:255',
            'calling_code' => 'required|numeric',
            'iso' => 'required|string|max:5|unique:tbl_country,iso',
            'sms_status' => 'required',
            'is_dispatchable' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'country.required'=>'Country Name Required',
            'calling_code.required'=>'Calling Code Required',
            'iso.required'=>'ISO Required',
            'sms_status.required'=>'Select SMS Status',
            'is_dispatchable.required'=>'Select Is Dispatchable',
        ];
    }
}
