<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser_serviceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id'           => 'integer|exists:user,id',
            'rank'              => 'required|string|max:255',
            'qlrf'              => 'required|string|max:255',
            'badge_number'      => 'required|string|max:255',
            'entered_service'   => 'required|date',
            'last_promotion'    => 'required|date',
            'unit'              => 'required|string',
        ];
    }
}
