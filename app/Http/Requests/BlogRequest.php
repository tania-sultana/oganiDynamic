<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
    $first_thumbnail = $this->blog?->firstMedia ? 'nullable' : 'required';
    $second_thumbnail = $this->blog?->secondMedia ? 'nullable' : 'required';

    return [
        'first_title' => 'required|string|max:255',
        'second_title' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'short_description' => 'nullable|string',
        'description' => 'nullable|string',
        'category' => 'nullable|string',
        'tags' => 'nullable|string',

        'first_thumbnail' => "$first_thumbnail|image|mimes:png,jpg,jpeg,webp|max:2048",
        'second_thumbnail' => "$second_thumbnail|image|mimes:png,jpg,jpeg,webp|max:2048",
    ];
}

}
