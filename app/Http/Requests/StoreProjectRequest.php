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
            // vlaidation rules

            'title' => 'required|string|unique:projects',
            'description' => 'required|string',
            'cover_img' => 'file|nullable',
            'link' => 'required|string',
            'categories' => 'numeric|nullable'
        ];
    }

    public function message(): array
    {
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'cover_img' => 'Image file type is invalid',
            'link.required' => 'Link is required',
            'categories.numeric' => 'Categories is required'
        ];
    }
}
