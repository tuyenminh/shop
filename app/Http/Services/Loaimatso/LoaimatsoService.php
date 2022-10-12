<?php

namespace App\Http\Services\Loaimatso;

use App\Models\Loaimatso;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class LoaimatsoService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaimatso::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo loại mặt số thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Loaimatso::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $loaimatso = Loaimatso::where('id', $request->input('id'))->first();
        if ($loaimatso) {
            $loaimatso->delete();
            return true;
        }
        return false;
    }
    public function update($request, $loaimatso): bool {
        $loaimatso->ten = (string) $request->input('ten');
        $loaimatso->save();
        Session::flash('success', 'Cập nhật thành công loại mặt số');
        return true;
    }
}