<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

     
    public function rules()
    {
        return [
                'email'=> 'required',
                'password'=> 'required|min:5'
        ];
    }

    public function messages(){
        return [
            'uname.required' => 'cant left empty...',
            'uname.min' => 'at least 5 char ...',
            'password.required'=> 'test message ...'
        ];
    }
}