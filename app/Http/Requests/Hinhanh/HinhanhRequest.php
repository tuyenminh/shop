<?php

namespace App\Http\Requests\Hinhanh;

use Illuminate\Foundation\Http\FormRequest;

class HinhanhRequest extends FormRequest
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
        'thumb' => 'required',
        ];
    }
    public function messages() {
        return [
            'thumb.required' => 'Vui lòng chọn hình ảnh đồng hồ', 
        ];  
    }
}
