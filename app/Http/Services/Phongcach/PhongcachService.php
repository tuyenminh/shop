<?php

namespace App\Http\Services\Phongcach;

use App\Models\Phongcach;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class PhongcachService {
    public function create($request){
        try {
            // $data = $request->input();
            Phongcach::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo phong cách thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}