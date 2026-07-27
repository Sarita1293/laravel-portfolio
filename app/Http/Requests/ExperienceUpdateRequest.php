<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ExperienceUpdateRequest extends FormRequest
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
                    'company_name'      => 'required|string|max:255',
                    'designation'       => 'required|string|max:255',
                    'project_name'      => 'required|string',
                    'start_date'        => 'required|date',
                    'end_date'          => 'nullable|date|after_or_equal:start_date',
                    'currently_working' => 'nullable|boolean',
                    'location'          => 'nullable|string|max:255',
                    'description'       => 'required|string',
                    'roles_and_responsibilities' => 'required|string',
                    'display_order'     => 'required|integer|min:1',
                    'status'            => 'required|boolean',
                ];
    }
}
