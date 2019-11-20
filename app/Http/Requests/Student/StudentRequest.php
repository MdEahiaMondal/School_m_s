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
        return [
           'name' => 'required|string|max:100',
            'email' => 'required|unique:users,email',
            'password' => 'required|max:15',
            'phone' => 'required|unique:students,phone',
            'parent_id' => 'required',
            'parent_phone' => 'required',
            'class_id' => 'required',
            'roll_number' => 'required|unique:students,roll_number',
            'age' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'nullable|max:10',
            'address' => 'nullable|string',
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'Name Field is also Required',
            'name.max' => 'Name Field does not longer more then 100 Character',
        ];
    }

}
