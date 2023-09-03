<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required| min:8| max:255',
            // 'status' => 'required| numeric',
            'depscription' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,webp,gif,svg|max:2048'
        ];
    }
}
