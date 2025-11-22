<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroSectionRequest extends FormRequest
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
        $thumbnail = $this->herosection ? 'nullable' : 'required';
        return [
            'header' => 'required|string|max:255',
            'first_title' => 'required|string|max:255',
            'second_title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'btn_name' => 'required|string|max:255',
            'btn_url' => 'required|string|max:255',
            'thumbnail' => "$thumbnail|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048",
        ];
    }
}
