<?php

namespace App\Http\Services\Kieumat;

use App\Models\Kieumat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class KieumatService {
    public function create($request){
        try {
            // $data = $request->input();
            Kieumat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo kiểu mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}