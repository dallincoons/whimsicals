<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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
            'title' => 'required|max:24',
            'description' => 'required|max:500',
            'product_image' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'product_image.required' => 'Image is required'
        ];
    }
}
