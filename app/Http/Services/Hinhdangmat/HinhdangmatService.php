<?php

namespace App\Http\Services\Hinhdangmat;

use App\Models\Hinhdangmat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class HinhdangmatService {
    public function create($request){
        try {
            // $data = $request->input();
            Hinhdangmat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo hình dáng mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}