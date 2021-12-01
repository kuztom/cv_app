<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkExperienceFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'company' => 'required|min:2',
            'position'=> 'required|min:2',
            'start_date'=> 'required|date',
            'end_date',
            'additional_information',
        ];
    }
}
