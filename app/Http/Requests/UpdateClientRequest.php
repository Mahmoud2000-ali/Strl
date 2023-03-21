<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClientRequest extends FormRequest
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
                Rule::unique('users')->ignore($this->client),
            ],
            'phone_number' => ['required', 'min:2', 'max:35'],
            'email' => [
                'required',
                'min:2',
                'max:30',
                Rule::unique('users')->ignore($this->client),
            ],
            'image' => ['nullable', 'image'],
        ];
    }
}//-- end of class UpdateClientRequest
