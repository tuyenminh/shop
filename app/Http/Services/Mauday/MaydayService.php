<?php

namespace App\Http\Services\Mauday;

use App\Models\Mauday;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class MaudayService {
    public function create($request){
        try {
            // $data = $request->input();
            Mauday::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo màu dây thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}