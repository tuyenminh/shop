<?php

namespace App\Http\Services\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class SliderService {
    public function insert($request) {
        try {
            #$request->except('_token');
            Slider::create($request->input());
            Session::flash('success', 'Thêm slider mới thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm slider mới không thành công');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }
}