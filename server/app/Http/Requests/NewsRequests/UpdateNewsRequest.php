<?php

namespace App\Http\Requests\NewsRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
        $news=$this->route('news');
        return [
            'title'=>'required|max:255|unique:news,title,'.$news->id,
            'content'=>'required|max:5000',
        ];
    }
}
