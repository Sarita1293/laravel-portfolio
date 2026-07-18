<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SkillStoreRequest extends FormRequest
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
        
        'skill_category_id' => 'required|exists:skill_categories,id',
        
        'name' => 'required|string|max:255',

        'percentage' => 'required|integer|min:0|max:100',

        'display_order' => 'required|integer|min:1',

        'status' => 'required|boolean',
        ];
    }
}
