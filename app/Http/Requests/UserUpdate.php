<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
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
            'first_name' =>'required',
            'last_name' =>'required',
            'age' =>'required|numeric',
            'address' =>'required',

        ];
    }


    public function messages()
    {
        return [
            'first_name.required'=>' firstname REQUIRED',
            'last_name.required'=>' lastname REQUIRED' ,
            'age.required'=>' age required',
            'age.numeric'=>' age must be  numeric',
            'address.required'=>' address required' ,

        ];
    }
}
