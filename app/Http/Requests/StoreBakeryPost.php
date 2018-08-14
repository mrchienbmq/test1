<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBakeryPost extends FormRequest
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
            'name' => 'required|unique:bakeries|max:50',
            'categoryId' => 'required',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn có chắc nhập đúng tên của mình',
            'name.unique' => 'Tên đã tồn tại',
        ];
    }


    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->get('note') == 'phuc') {
                $validator->errors()->add('note', 'Phuc is not allowed.');
            }
        });
    }
}
