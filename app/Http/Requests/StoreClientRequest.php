<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
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
            'first_name' => ['required', 'min:2', 'max:25'],
            'last_name' => ['required', 'min:2', 'max:25'],
            'username' => [
                'required',
                'min:2',
                'max:15',
                Rule::unique('users'),
            ],
            'phone_number' => ['required', 'min:2', 'max:35'],
            'password' => ['required', 'min:2', 'max:25'],
            'email' => [
                'required',
                'min:2',
                'max:30',
                Rule::unique('users'),
            ],
            'image' => ['nullable', 'image'],
        ];
    }
}//-- end class StoreClientRequest
