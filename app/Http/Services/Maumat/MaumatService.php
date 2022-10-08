<?php

namespace App\Http\Services\Maumat;

use App\Models\Maumat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class MaumatService {
    public function create($request){
        try {
            // $data = $request->input();
            Maumat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo màu mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}