<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddEventRequest extends Request
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
            'title' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'state' => 'required'
        ];
    }
}
