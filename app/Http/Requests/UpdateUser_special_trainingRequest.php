<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser_special_trainingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id'                   => 'integer|exists:users,id',
            'special_course_training'   => 'required|string|max:255',
            'duration'                  => 'required|integer',
        ];
    }
}
