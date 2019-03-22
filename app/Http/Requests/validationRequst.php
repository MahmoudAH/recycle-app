<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationRequst extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
    'name'=>'required|min:3',
    'telephone'=>'required|unique|regex:/(01)[0-9]{9}/|size:11',
    'email'=>'required|email',
    'message'=>'min:15',
        ];
    }
}
