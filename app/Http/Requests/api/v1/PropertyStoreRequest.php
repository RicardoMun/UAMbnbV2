<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class PropertyStoreRequest extends FormRequest
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

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
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
            'image'=>'required | string',
            'address' => 'required | string | min: 1',
            'city' => 'required | string | min:3'
        ];
    }
}
