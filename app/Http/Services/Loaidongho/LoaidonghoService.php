<?php

namespace App\Http\Services\Loaidongho;

use App\Models\Loaidongho;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class LoaidonghoService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaidongho::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo loại đồng hồ thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Loaidongho::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $loaidongho = Loaidongho::where('id', $request->input('id'))->first();
        if ($loaidongho) {
            $loaidongho->delete();
            return true;
        }
        return false;
    }
    public function update($request, $loaidongho): bool {
        $loaidongho->ten = (string) $request->input('ten');
        $loaidongho->save();
        Session::flash('success', 'Cập nhật thành công loại đồng hồ');
        return true;
    }
}