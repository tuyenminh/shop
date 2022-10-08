<?php

namespace App\Http\Services\Loaidongho;

use App\Models\Loaidongho;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class LoaidonghoService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaidongho::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo loại đồng hồ thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}