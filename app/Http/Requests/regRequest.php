<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class regRequest extends FormRequest
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
             'username' => 'required',
              'first_name' => 'required',
               'last_name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password'=> 'required|min:5'
        ];
    }

    public function messages(){
        return [
            'username.required' => 'cant left empty...',
            'password.min' => 'at least 5 char ...',
            'password.required'=> 'test message ...'
        ];
    }
}