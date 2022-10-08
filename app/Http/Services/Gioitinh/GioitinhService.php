<?php

namespace App\Http\Services\Gioitinh;

use App\Models\Gioitinh;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class GioitinhService {
    public function create($request){
        try {
            // $data = $request->input();
            Gioitinh::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo giới tính thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}