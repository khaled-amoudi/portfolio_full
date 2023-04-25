<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'project_type' => 'required|string',
            'project_name' => 'required|string',
            'project_link' => 'nullable|url',
            'project_image' => 'nullable|image|max:8000|mimes:jpeg,png,jpg,gif',
            'is_active' => 'required',
            'order_number' => 'nullable|integer',
        ];
    }
}
