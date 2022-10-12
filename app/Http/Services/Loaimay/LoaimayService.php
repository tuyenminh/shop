<?php

namespace App\Http\Services\Loaimay;

use App\Models\Loaimay;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class LoaimayService {
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
    public function getAll(){
        return Loaimay::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $loaimay = Loaimay::where('id', $request->input('id'))->first();
        if ($loaimay) {
            $loaimay->delete();
            return true;
        }
        return false;
    }
    public function update($request, $loaimay): bool {
        $loaimay->ten = (string) $request->input('ten');
        $loaimay->save();
        Session::flash('success', 'Cập nhật thành công loại máy');
        return true;
    }
}