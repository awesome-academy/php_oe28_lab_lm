<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|max:255',
            'password' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => trans('message.usernamerequired'),
            'password.required' => trans('message.passwordrequired'),
            'password.min' => trans('message.passwordmin'),
        ];
    }
}