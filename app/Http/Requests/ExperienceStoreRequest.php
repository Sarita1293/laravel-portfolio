<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ExperienceStoreRequest extends FormRequest
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
        
        'company_name' => 'required|string|max:255',

        'designation' => 'required|string|max:255',

        'project_name' => 'required|string',

        'start_date' => 'required|date',

        'end_date' => 'nullable|date|after_or_equal:start_date',

        'currently_working' => 'nullable|boolean',

        'location' => 'nullable|string|max:255',

        'description' => 'required|string',

        'roles_and_responsibilities' => 'required|string',

        'display_order' => 'required|integer|min:1',

        'status' => 'required|boolean',
        ];
    }

    public function messages(): array
    {
        return [

            'company_name.required' => 'Please enter company name.',

            'designation.required' => 'Please enter designation.',

            'start_date.required' => 'Please select start date.',

            'end_date.after_or_equal' => 'End date must be after start date.',

        ];
    }
    
    public function attributes(): array
    {
        return [

            'company_name' => 'Company Name',

            'display_order' => 'Display Order',

            'start_date' => 'Start Date',

            'end_date' => 'End Date',

        ];
    }
}
