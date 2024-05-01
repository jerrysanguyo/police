<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser_InfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'user_id'       => ['integer', 'exists:users,id'],
            'birthdate'     => ['required', 'date'],
            'age'           => ['required', 'integer'],
            'height'        => ['required', 'integer'],
            'weight'        => ['required', 'integer'],
            'hip'           => ['required', 'integer'],
            'wrist'         => ['required', 'integer'],
            'waist'         => ['required', 'integer'],
            'bmi_result'    => ['required', 'string'],
            'bmi_category'  => ['required', 'string', 'in:under_weight,normal_weight,over_weight,Obese_1,Obese_2'],
        ];
    }
}
