<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|min:2',
            'additional_information' => 'required|min:5',
        ];
    }
}
