<?php

namespace App\Http\Services\Tienich;

use App\Models\Tienich;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class TienichService {
    public function create($request){
        try {
            // $data = $request->input();
            Tienich::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo tiện ích thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Tienich::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $tienich = Tienich::where('id', $request->input('id'))->first();
        if ($tienich) {
            $tienich->delete();
            return true;
        }
        return false;
    }
    public function update($request, $tienich): bool {
        $tienich->ten = (string) $request->input('ten');
        $tienich->save();
        Session::flash('success', 'Cập nhật thành công tiện ích');
        return true;
    }
}