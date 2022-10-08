<?php

namespace App\Http\Services\Tienich;

use App\Models\Tienich;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class TienichService {
    public function create($request){
        try {
            // $data = $request->input();
            Tienich::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo tiện ích thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}