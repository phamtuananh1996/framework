<?php

namespace App\Http\Requests\NewsRequests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewsRequest extends FormRequest
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
            'title'=>'required|max:255|unique:news',
            'content'=>'required|max:5000',
            'image'=>'required|mimes:jpg,jpeg,bmp,png',
        ];
    }
}
