<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentEditReq extends FormRequest
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
            'academic_adviser' => 'bail|nullable|string|max:255',
            'supervisor_1' => 'bail|required|string|max:255',
            'supervisor_2' => 'bail|required|string|max:255',
            'thesis_title' => 'bail|required|string|max:255',
            'semester' => 'bail|nullable|string|max:2',
            'name' => 'bail|required|string|max:255',
            'nim' => 'bail|required|string|max:255',
            'kk' => 'bail|required|string|max:255',
            'image' => 'bail|nullable|file|image',
        ];
    }
}
