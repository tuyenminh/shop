<?php

namespace App\Http\Services\Loaimatso;

use App\Models\Loaimatso;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class LoaimatsoService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaimatso::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo loại mặt số thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}