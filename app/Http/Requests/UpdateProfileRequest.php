<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'name'  => ['required', 'string', 'max:255'],
            'username'  => ['required', 'string', 'max:255'],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
        ];
    }
}
