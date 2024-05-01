<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUser_trainingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'user_id'               => 'integer|exists:users,id',
            'mandatory_training'    => 'required|string|max:255',
            'date_graduation'       => 'required|date',
            'order_of_merit'        => 'required|string|max:255',
            'ftoc'                  => 'required|string|max:255',
            'qe_result'             => 'required|string|max:255',
            'date_qualifying_exam'  => 'required|date',
        ];
    }
}
