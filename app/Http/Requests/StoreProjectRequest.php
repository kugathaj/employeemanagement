<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'Required|string|min:2',
            'description' => 'string|max:255',
            'start_date' => 'Required|date',
            'end_date' => 'date|nullable',
            'status' => 'Required|string',
            'project_manager_id' => 'Required| numeric',
            'budget' => 'Required|numeric',
            'actual_cost' => 'numeric|nullable',
            'priority' => 'Required|string',
            'comments' => 'string|nullable',
        ];
    }
}
