<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('companies'), 'min:2', 'max:25'],
            'email' => ['required', Rule::unique('companies'), 'min:2', 'max:25'],
            'password' => ['required', 'min:2', 'max:25'],
            'phone_number' => ['required', 'min:2', 'max:35'],
            'building_number' => ['required', 'integer', 'max:15'],
            'floor_number' => ['required', 'integer', 'max:15'],
            'locker_number' => ['required', 'integer', 'max:15'],
            'price' => ['required'],
            'image' => ['nullable', 'image'],
        ];
    }
}
