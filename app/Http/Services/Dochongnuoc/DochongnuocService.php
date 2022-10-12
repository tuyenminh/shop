<?php

namespace App\Http\Services\Dochongnuoc;

use App\Models\Dochongnuoc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class DochongnuocService {
    public function create($request){
        try {
            // $data = $request->input();
            Dochongnuoc::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo độ chống nước thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Dochongnuoc::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $dochongnuoc = Dochongnuoc::where('id', $request->input('id'))->first();
        if ($dochongnuoc) {
            $dochongnuoc->delete();
            return true;
        }
        return false;
    }
    public function update($request, $dochongnuoc): bool {
        $dochongnuoc->ten = (string) $request->input('ten');
        $dochongnuoc->save();
        Session::flash('success', 'Cập nhật thành công độ chống nước');
        return true;
    }
}