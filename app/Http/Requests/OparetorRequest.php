<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OparetorRequest extends FormRequest
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
            'first_name'=> 'required',
           
            'department'=> 'required',
            'phone'=> 'required|min:9|max:11',
            'email'=> 'required|unique:oparetors',
            'password'=> 'required|min:5'
        ];
    }

    public function messages(){
        return [
            
        ];
    }
}