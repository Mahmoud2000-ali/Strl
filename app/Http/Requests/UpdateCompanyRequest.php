<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateCompanyRequest extends FormRequest
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
            'name' => [
                'required',
                'min:2',
                'max:15',
                Rule::unique('companies')->ignore($this->company),
            ],
            'email' => [
                'required',
                'min:2',
                'max:30',
                Rule::unique('companies')->ignore($this->company),
            ],
            'phone_number' => ['required', 'min:2', 'max:35'],
            'price' => ['required'],
            'image' => ['nullable', 'image'],
        ];
    }
}
