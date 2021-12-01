<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'surname' => 'required|min:2',
            'phone' => 'required|min:8',
            'email' => 'required|email',
            'street' => 'required|min:2',
            'house_number' => 'required',
            'city' => 'required|min:2',
            'country' => 'required|min:2',
            'zip_code' => 'required|min:4',
        ];
    }
}
