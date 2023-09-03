<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccessoryStoreRequest extends FormRequest
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
            'name' => 'required| min:4| max:255',
            'content' => 'required',
            'price' => 'required',
            'brand_id' => 'required',
            'item_id' => 'required',
            'status' => 'required| numeric',
            'depscription' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048'
        ];
    }
}
