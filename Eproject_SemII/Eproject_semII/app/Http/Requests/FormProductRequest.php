<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormProductRequest extends FormRequest
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
            'name' => ['required'],
            'thumbnail' => ['required'],
            'labelName' => ['required', 'min:5'],
            'category' => ['required'],
            'weight' =>  ['required'],
            'Tag' =>  ['required'],
            'labelTitle' =>  ['required'],
            'price' =>  ['numeric', 'required'],
            'name',
            'labelName',
            'price',
            'weight',
            'category',
            'labelTitle',
            'Tag',
            'thumbnail',
            'description',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Enter product name',
            'thumbnail.required' => 'Please add product pictures',
            'labelName.required' => 'Please enter file size',
            'category.required' => 'Please enter Label Name',
            'weight.required' => 'Vui lòng nhập cân nặng sản phẩm',
            'Tag.required' => 'Vui lòng nhập vitamin sản phẩm',
            'labelTitle.required' => 'Vui lòng nhập chất ding dưỡng sản phẩm',
            'price.required' => 'Vui lòng nhập giá sản phẩm',
            'labelName.min' => 'Tên nhà vườn tối thiểu 5 ký tự',
        ];
    }
}
