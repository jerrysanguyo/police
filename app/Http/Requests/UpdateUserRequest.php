<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        return [
            'first_name' =>     ['required', 'string', 'max:255'],
            'middle_name' =>    ['required', 'string', 'max:255'],
            'last_name' =>      ['required', 'string', 'max:255'],
            'email' =>          ['required', 'string', 'email', 'max:255'],
            'mobile_number' =>  ['nullable', 'string', 'max:255'],
            'password' =>       ['required', 'string', 'min:8'],
        ];
    }
}
