<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
            'name' => 'required | string | min:5 | max:35',
            'description' => 'min:10 | max:350',
            'area' => 'required | min:1 | numeric',
            'capacity' => 'required | numeric | min:1',
            'dailyRent' => 'required | numeric | min:1',
            'address' => 'required | string | min: 1',
            'image'=>'required | string',
            'city' => 'required | string | min:3'
        ];
    }
}
