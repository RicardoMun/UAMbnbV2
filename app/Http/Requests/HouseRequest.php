<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseRequest extends FormRequest
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
       /*  return [
        'name'=>'required | string | min:1 | max:35',
        'description'=>'required | string | min:1 | max:150',
        'maximun_capacity'=>'required | string | min:1',
        'characteristics'=>'required | string | min:1',
        'location'=>'required | string | min:1 | max:40',
        'area'=>'required | numeric | min:1',
        'photos'=>' | string',
        'price'=>'required | numeric | min:1'
        ]; */
    }
}