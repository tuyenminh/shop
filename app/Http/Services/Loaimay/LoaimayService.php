<?php

namespace App\Http\Services\Loaimay;

use App\Models\Loaimay;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class LoaimaysoService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaimay::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo loại máy thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
}