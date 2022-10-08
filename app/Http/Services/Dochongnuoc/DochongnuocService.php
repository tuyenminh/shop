<?php

namespace App\Http\Services\Dochongnuoc;

use App\Models\Dochongnuoc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class DochongnuocService {
    public function create($request){
        try {
            // $data = $request->input();
            Dochongnuoc::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo độ chống nước thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}