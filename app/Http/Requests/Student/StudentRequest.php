<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        $id = isset($this->student) ? $this->student->user->id : null;
        $student_id = isset($this->student) ? $this->student->id : null;
       $rules = [
           'name' => 'required|string|max:100',
            'parnt_id' => 'required',
            'all_class_id' => 'required',
            'class_group_id' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'nullable|max:10',
            'address' => 'nullable|string',
        ];

       if (request()->isMethod('post'))
       {
           $rules['password'] ='required|max:15';
           $rules['email'] = 'required|unique:users,email';
           $rules['phone'] = 'required|unique:students,phone';
       }

       if (request()->isMethod('put') or request()->isMethod('PATCH'))
       {
           $rules['password'] ='nullable|max:15';
           $rules['email'] = 'required|unique:users,email,'.$id;
           $rules['phone'] = 'required|unique:students,phone,'.$student_id;
       }

       return  $rules;

    }


    public function messages()
    {
        return [
            'name.required' => 'Name Field is also Required',
            'name.max' => 'Name Field does not longer more then 100 Character',
        ];
    }

}
