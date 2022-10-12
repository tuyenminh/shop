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
    public function getAll(){
        return Phongcach::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $phongcach = Phongcach::where('id', $request->input('id'))->first();
        if ($phongcach) {
            $phongcach->delete();
            return true;
        }
        return false;
    }
    public function update($request, $phongcach): bool {
        $phongcach->ten = (string) $request->input('ten');
        $phongcach->save();
        Session::flash('success', 'Cập nhật thành công phong cách');
        return true;
    }
}