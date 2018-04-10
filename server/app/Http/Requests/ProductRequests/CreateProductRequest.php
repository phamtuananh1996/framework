<?php

namespace App\Http\Requests\ProductRequests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'name'=>'required|max:255|unique:products',
            'category_id'=>'required|numeric|min:1',
            'price'=>'required|numeric|min:10000',
            'image'=>'required|mimes:jpg,jpeg,bmp,png',
            'info'=>'required'
        ];
    }
}
