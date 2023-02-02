<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //if the rules are ok enter
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" =>["required", "max:255"],
            "email" => ["required", "email", "max:255", "min:6", "unique:users"],
            "password" => ["required", "min:8", /*"confirmed"*/],
            // "password_confirmed" => ["required"]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "name.required" => "The name is required",
            "name.max" => "Max name 255 characters",
            "email.required" => "The email is required",
            "email.email" => "Email without correct format",
            "email.max" => "Max email require 255 characters",
            "email.min" => "Min email require 6 characters",
            "email.unique" => "The email was registered before",
            "password.required" => "The password is required",
            "password.min" => "The password must be 8 characters",
            // "password.confirmed" => "The passwords are not the same"
        ];
    }
}
