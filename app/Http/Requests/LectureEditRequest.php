<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureEditRequest extends FormRequest
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
            'email' => 'bail|required|string|max:255|email',
            'address' => 'bail|nullable|string|max:255',
            'phone' => 'bail|nullable|string|max:255',
            'name' => 'bail|required|string|max:255',
            'nidn' => 'bail|required|string|max:255',
            'nip' => 'bail|required|string|max:255',
            'kk' => 'bail|required|string|max:255',
            'image' => 'bail|nullable|file|image',
        ];
    }
}
