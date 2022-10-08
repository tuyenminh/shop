<?php

namespace App\Http\Requests\Maumat;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
            'ten' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng tên chất liệu dây'
        ];
    }

}
