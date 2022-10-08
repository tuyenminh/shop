<?php

namespace App\Http\Services\Chatlieumatkinh;

use App\Models\Chatlieumatkinh;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class ChatlieumatkinhService {
    public function create($request){
        try {
            // $data = $request->input();
            Chatlieumatkinh::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo chất liệu mặt kính thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}