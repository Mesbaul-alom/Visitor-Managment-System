<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest  extends FormRequest
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
                'student_name'=> 'required',
                'father_name'=> 'required',
                'mother_name'=> 'required',
                'board'=> 'required',
                'reg_no'=> 'required',
                'roll_number'=> 'required',
                'institute_name'=> 'required',
                'dob'=> 'required',
                'present_address'=> 'required',
                'permanent_address'=> 'required',
                'department'=> 'required',
                'phone'=> 'required|min:9|max:11',
                  'email'=> 'required|unique:students',
                'password'=> 'required|min:5'
        ];
    }

    public function messages(){
        return [
           
        ];
    }
}