<?php

namespace App\Http\Services\Maumat;

use App\Models\Maumat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class MaumatService {
    public function create($request){
        try {
            // $data = $request->input();
            Maumat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo màu mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Maumat::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $maumat = Maumat::where('id', $request->input('id'))->first();
        if ($maumat) {
            $maumat->delete();
            return true;
        }
        return false;
    }
    public function update($request, $maumat): bool {
        $maumat->ten = (string) $request->input('ten');
        $maumat->save();
        Session::flash('success', 'Cập nhật thành công màu mặt');
        return true;
    }
}