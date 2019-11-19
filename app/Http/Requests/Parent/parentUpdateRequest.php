<?php

namespace App\Http\Requests\Parent;

use App\Parnt;
use Illuminate\Foundation\Http\FormRequest;

class parentUpdateRequest extends FormRequest
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
        $parnt = Parnt::find($this->parent);
        return [
            'name' => 'required|max:60',
            'email' => 'required|unique:users,email,'.$parnt->user_id,
            'phone' => 'required',
            'job' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ];
    }


    public function messages()
    {
        return [
          'name.required' => 'Name field is also required',
          'name.max' => 'Name has not more then 60 charecters',
        ];
    }

}
