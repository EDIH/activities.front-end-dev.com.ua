<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePagesRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'image_path' => 'required|string:255',
            'image' => 'required|mimes:jpeg,bmp,png',
            'parent_page_id' => 'exists:pages,id',
            'properties.*.title' => 'required|string|max:255',
            'properties.*.keywords' => 'required|string|max:255',
            'properties.*.description' => 'required|string|max:255',
            'properties.*.h1' => 'nullable|string|max:255',
            'properties.*.h2' => 'nullable|string|max:255',
            'properties.*.alias' => 'required|string|max:255|unique:page_properties,alias',
        ];
    }
}
