<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name'  =>  'required|min:4|max:20|regex:/^[a-zA-Z\s]*$/',
            'username'  =>  'required|min:4|max:20|alpha_num',
            'email' =>  'required|email',
            'password'  =>  'required|min:8|max:100|confirmed',
            'password_confirmation'    =>  'required'
        ];
    }
}
