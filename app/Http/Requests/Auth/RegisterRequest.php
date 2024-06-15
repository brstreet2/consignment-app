<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'     => 'required|regex:/^(?:[^"\'\<>])+$/i',
            'phone'    => 'required|numeric',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Name field cannot be empty.',
            'name.regex'            => 'Please enter a valid name.',
            'phone.required'        => 'Please enter a valid phone number.',
            'phone.numeric'         => 'Please enter a valid number (no characters are allowed).',
            'email.required'        => 'Email field cannot be empty.',
            'email.email'           => 'Please input a valid email.',
            'password.required'     => 'Password field cannot be empty.',
            'password.min'          => 'Password must be atleast 8 characters.',
            'password.confirmed'    => 'Password and Password Confirmation must match.'
        ];
    }
}
