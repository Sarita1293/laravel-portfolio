<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonalDetailRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [

            'name' => 'required|string|max:255',

            'title' => 'required|string|max:255',

            'mobile' => 'required|string|max:15',

            'email' => 'required|email|max:255',

            'address' => 'required|string',

            'years_of_experience' => 'required|numeric|min:0',

            // Profile image validation
            'profile_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048'
            ],


            // Resume validation
            'resume_file' => [
                'nullable',
                'mimes:pdf,doc,docx',
                'max:5120'
            ],

            'linkedin_url' => 'nullable|url',

            'github_url' => 'nullable|url',

            

        ];
    }
}
