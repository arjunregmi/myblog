<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateAndUpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'title' => 'required',
                 'content' => 'required',
                 'user_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => ':attribute is required.',
            'content.required' => ':attribute is required.',
            'user_id.required' => ':attribute is required',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Title',
            'content'=>'Content',
            'user_id'=>'User_Id'
        ];
    }
}
