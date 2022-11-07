<?php

namespace App\Http\Requests\Dongho;

use Illuminate\Foundation\Http\FormRequest;

class DonghoRequest extends FormRequest
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
        'dh_ma' => 'required',
        //     'cld_id' => 'required',
        //     'clmk_id' => 'required',
        //     'dcn_id' => 'required',
        //     'dkm_id' => 'required',
        //     'gt_id' => 'required',
        //     'hdm_id' => 'required',
        //     'km_id' => 'required',
        //     'ldh_id' => 'required',
        //     'lms_id' => 'required',
        //     'lm_id' => 'required',
        //     'md_id' => 'required',
        //     'mm_id' => 'required',
        //     'pc_id' => 'required',
        //     'th_id' => 'required',
        //     'ti_id' => 'required'
        ];
    }
    public function messages() {
        return [
            'dh_ma.required' => 'Vui lòng nhập mã đồng hồ',
            // 'cld_id.required' => 'Vui lòng chọn chất liệu dây',
            // 'clmk_id.required' => 'Vui lòng chọn chất liệu mặt kính',
            // 'dcn_id.required' => 'Vui lòng chọn độ chống nước',
            // 'dkm_id.required' => 'Vui lòng chọn đường kính mặt',
            // 'gt_id.required' => 'Vui lòng chọn giới tính',
            // 'hdm_id.required' => 'Vui lòng chọn hình dáng ,mặt',
            // 'km_id.required' => 'Vui lòng chọn kiểu mặt',
            // 'ldh_id.required' => 'Vui lòng chọn loại đồng hồ',
            // 'lms_id.required' => 'Vui lòng chọn loại mặt số',
            // 'lm_id.required' => 'Vui lòng chọn loại máy',
            // 'md_id.required' => 'Vui lòng chọn màu dây',
            // 'mm_id.required' => 'Vui lòng chọn màu mặt',
            // 'pc_id.required' => 'Vui lòng chọn phong cách',
            // 'th_id.required' => 'Vui lòng chọn thương hiệu',
            // 'ti_id.required' => 'Vui lòng chọn tiện ích'

            
        ];  
    }
}
