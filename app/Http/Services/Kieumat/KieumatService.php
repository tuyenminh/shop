<?php

namespace App\Http\Services\Kieumat;

use App\Models\Kieumat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class KieumatService {
    public function create($request){
        try {
            // $data = $request->input();
            Kieumat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo kiểu mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Kieumat::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $kieumat = Kieumat::where('id', $request->input('id'))->first();
        if ($kieumat) {
            $kieumat->delete();
            return true;
        }
        return false;
    }
    public function update($request, $kieumat): bool {
        $kieumat->ten = (string) $request->input('ten');
        $kieumat->save();
        Session::flash('success', 'Cập nhật thành công kiểu mặt');
        return true;
    }
}