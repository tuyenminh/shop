<?php

namespace App\Http\Services\Gioitinh;

use App\Models\Gioitinh;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class GioitinhService {
    public function create($request){
        try {
            // $data = $request->input();
            Gioitinh::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo giới tính thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function show(){
        return Gioitinh::select('ten', 'id')->get();
    }
    public function getAll(){
        return Gioitinh::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $gioitinh = Gioitinh::where('id', $request->input('id'))->first();
        if ($gioitinh) {
            $gioitinh->delete();
            return true;
        }
        return false;
    }
    public function update($request, $gioitinh): bool {
        $gioitinh->ten = (string) $request->input('ten');
        $gioitinh->save();
        Session::flash('success', 'Cập nhật thành công giới tính');
        return true;
    }
}