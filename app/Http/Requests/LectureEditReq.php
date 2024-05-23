<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureEditReq extends FormRequest
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
            'phone_number' => 'bail|nullable|string|max:255',
            'address' => 'bail|nullable|string|max:255',
            'email' => 'bail|required|max:255|email',
            'name' => 'bail|required|string|max:255',
            'nidn' => 'bail|required|string|max:255',
            'nip' => 'bail|required|string|max:255',
            'kk' => 'bail|required|string|max:255',
            'image' => 'bail|nullable|file|image',
        ];
    }
}
