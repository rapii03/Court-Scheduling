<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRegisterReq extends FormRequest
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
            'email' => 'bail|required|max:255|email|unique:users,email',
            'supervisor_1' => 'bail|required|string|max:255',
            'supervisor_2' => 'bail|required|string|max:255',
            'thesis_title' => 'bail|required|string|max:255',
            'password' => 'bail|required|string|max:255',
            'name' => 'bail|required|string|max:255',
            'nim' => 'bail|required|string|max:255',
            'kk' => 'bail|required|string|max:255',
        ];
    }
}
