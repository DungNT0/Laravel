<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequets extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages()
    {
        return [
            'name.string'=>'Vui lòng điền đúng định dạng tên',
            'age.numeric'=>'Vui lòng điền số',
            'date.string'=>'Vui lòng điền đúng định dạng ngày tháng',
            'phone.numeric'=>'Vui lòng điền số',
            'web.string'=>'Vui lòng điền định dạng web',
            'address.string'=>'Vui lòng điền định dạng địa chỉ'
        ];
    }
}
