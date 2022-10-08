<?php

namespace App\Http\Services\Chatlieuday;

use App\Models\Chatlieuday;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class ChatlieudayService {
    public function create($request){
        try {
            // $data = $request->input();
            Chatlieuday::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo chất liệu dây thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}