<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'username' =>'required|unique:users,username',
            'password' =>'required',

        ];
    }

    public function messages()
    {
        return [
            'first_name.required'=>' firstname REQUIRED',
            'last_name.required'=>' lastname REQUIRED' ,
            'username.required'=>' username required',
            'username.unique'=>' username already created',
            'password.required'=>' password required' ,

        ];
    }
}
