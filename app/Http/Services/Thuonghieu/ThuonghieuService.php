<?php

namespace App\Http\Services\Thuonghieu;

use App\Models\Thuonghieu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class ThuonghieuService {
    public function create($request){
        try {
            // $data = $request->input();
            Thuonghieu::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo thương hiệu thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Thuonghieu::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $thuonghieu = Thuonghieu::where('id', $request->input('id'))->first();
        if ($thuonghieu) {
            $thuonghieu->delete();
            return true;
        }
        return false;
    }
    public function update($request, $thuonghieu): bool {
        $thuonghieu->ten = (string) $request->input('ten');
        $thuonghieu->save();
        Session::flash('success', 'Cập nhật thành công thương hiệu');
        return true;
    }
}