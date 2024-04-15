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
            'country' => 'required|string|max:255',
            'calling_code' => 'required|integer', // Validate as integer
            'sms_status' => 'required|in:0,1',
            'is_dispatchable' => 'required|in:0,1',
            'status' => 'required|in:0,1',
        ];
    }
}
