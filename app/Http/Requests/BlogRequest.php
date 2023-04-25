<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'slug' => 'string',
            'image' => 'image|max:8000|mimes:jpeg,png,jpg,gif',
            'title' => 'required',
            'body'  => 'required',
            'lang'  => 'required',
            'read_time'  => 'nullable|integer',
            'is_active'  => 'required',
            'author_id'  => 'required|exists:authors,id',
            'author_data'  => 'json|nullable'
        ];
    }
}
