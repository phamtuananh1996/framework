<?php

namespace App\Http\Requests\GroupCategoryRequests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupCategoryRequest extends FormRequest
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
        $groupCategory = $this->route('groupcategory');
        return [
            'name'=>'required|unique:group_categories,name,'.$groupCategory->id,
        ];
    }
}
