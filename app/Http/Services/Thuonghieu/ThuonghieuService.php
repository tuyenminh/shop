<?php

namespace App\Http\Services\Thuonghieu;

use App\Models\Thuonghieu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class ThuonghieuService {
    public function create($request){
        try {
            // $data = $request->input();
            Thuonghieu::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo thương hiệu thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}