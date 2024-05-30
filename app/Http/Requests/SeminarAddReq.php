<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeminarAddReq extends FormRequest
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
            'type' => 'bail|required|in:seminar-proposal,seminar-akhir',
            'sks' => 'bail|required|numeric|integer|max_digits:11',
            'supervisor_1' => 'bail|required|uuid|exists:users,id',
            'supervisor_2' => 'bail|required|uuid|exists:users,id',
            'examiner_1' => 'bail|nullable|uuid|exists:users,id',
            'examiner_2' => 'bail|nullable|uuid|exists:users,id',
            'thesis_title' => 'bail|required|string|max:255',

            'seminar_attending_file' => 'bail|required|file',
            'lecture_approval_file' => 'bail|nullable|file',
            'approval_file' => 'bail|required|file',
            'guidance_file' => 'bail|required|file',
            'revision_file' => 'bail|nullable|file',
            'docs_file' => 'bail|required|file',
            'ppt_file' => 'bail|required|file',
        ];
    }
}
