<?php

namespace App\Http\Services\Mauday;

use App\Models\Mauday;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class MaydayService {
    public function create($request){
        try {
            // $data = $request->input();
            Mauday::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo màu dây thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Mauday::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $mauday = Mauday::where('id', $request->input('id'))->first();
        if ($mauday) {
            $mauday->delete();
            return true;
        }
        return false;
    }
    public function update($request, $mauday): bool {
        $mauday->ten = (string) $request->input('ten');
        $mauday->save();
        Session::flash('success', 'Cập nhật thành công màu dây');
        return true;
    }
}