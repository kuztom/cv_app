<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'school' => 'required|min:2',
            'degree' => 'required|min:2',
            'start_date' => 'required|date',
            'end_date',
        ];
    }
}
