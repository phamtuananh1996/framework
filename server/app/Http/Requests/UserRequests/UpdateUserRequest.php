<?php

namespace App\Http\Requests\UserRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $user;
        return [
            'name'=>'required|max:255|min:6',
            'email'=>'required|email|unique:users',
            'password'=>'confirmed|min:6|max:255',
            'password_confirmation' => 'required|min:6|max:255',
            'phone'=>'max:255',
            'address'=>'required|max:255',
        ];
    }
}
