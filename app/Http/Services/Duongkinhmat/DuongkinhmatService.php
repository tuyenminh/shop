<?php

namespace App\Http\Services\Duongkinhmat;

use App\Models\Duongkinhmat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class DuongkinhmatService {
    public function create($request){
        try {
            // $data = $request->input();
            Duongkinhmat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo đường kính mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}