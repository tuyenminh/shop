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
    public function getAll(){
        return Hinhdangmat::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $hinhdangmat = Hinhdangmat::where('id', $request->input('id'))->first();
        if ($hinhdangmat) {
            $hinhdangmat->delete();
            return true;
        }
        return false;
    }
    public function update($request, $hinhdangmat): bool {
        $hinhdangmat->ten = (string) $request->input('ten');
        $hinhdangmat->save();
        Session::flash('success', 'Cập nhật thành công hình dáng mặt');
        return true;
    }
}