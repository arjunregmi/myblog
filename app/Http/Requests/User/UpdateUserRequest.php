<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => ['required', 'string', 'min:8', 'confirmed'],
         ];
    }
    public function messages()
    {
        return [
            'name.required' => ':attribute is required.',
            'email.required' => ':attribute is required.',
            'email.unique' => ':attribute is already taken',
            'password.required' => ':attribute is required',
            'password.min' => ':attribute should be minimum 8 characters',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email'=>'Email',
            'password'=>'Password'
        ];
    }
}
