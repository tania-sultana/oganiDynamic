<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cardRequest extends FormRequest
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
        $thumbnail = $this->card?->media ? 'nullable' : 'required';
        return [
            'category' => 'required|string|max:255',
            'offer' => 'required|string|max:255',
            'btn_name' => 'required|string|max:255',
            'btn_url' => 'required|string|max:255',
            // 'thumbnail' => "$thumbnail|image|mimes:png,jpg,jpeg,webp|max:2048",
        ];
    }
}
