<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureAddRequest extends FormRequest
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
            'email' => 'bail|required|string|max:255|email|unique:lectures',
            'address' => 'bail|required|string|max:750',
            'phone' => 'bail|required|string|max:255',
            'name' => 'bail|required|string|max:255',
            'nidn' => 'bail|required|string|max:255',
            'nip' => 'bail|required|string|max:255',
            'kk' => 'bail|required|string|max:255',
        ];
    }
}
