<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        $thumbnail = $this->product?->media ? 'nullable' : 'required'; //update product condition
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|lte:price',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'additional_information' => 'nullable|string',
            'weight' => 'nullable|numeric|min:0',
            'thumbnail' => "$thumbnail|image|mimes:png,jpg,jpeg,webp|max:2048",
        ];
    }
}
