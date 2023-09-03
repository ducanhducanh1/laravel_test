<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerStoreRequest extends FormRequest
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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'img1' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'img2' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048'
        ];
    }
}
