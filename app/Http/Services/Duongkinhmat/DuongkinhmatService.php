<?php

namespace App\Http\Services\Duongkinhmat;

use App\Models\Duongkinhmat;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class DuongkinhmatService {
    public function create($request){
        try {
            // $data = $request->input();
            Duongkinhmat::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo đường kính mặt thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Duongkinhmat::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $duongkinhmat = Duongkinhmat::where('id', $request->input('id'))->first();
        if ($duongkinhmat) {
            $duongkinhmat->delete();
            return true;
        }
        return false;
    }
    public function update($request, $duongkinhmat): bool {
        $duongkinhmat->ten = (string) $request->input('ten');
        $duongkinhmat->save();
        Session::flash('success', 'Cập nhật thành công đường kính mặt');
        return true;
    }
}