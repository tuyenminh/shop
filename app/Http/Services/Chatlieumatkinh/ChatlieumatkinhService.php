<?php

namespace App\Http\Services\Chatlieumatkinh;

use App\Models\Chatlieumatkinh;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class ChatlieumatkinhService {
    public function create($request){
        try {
            // $data = $request->input();
            Chatlieumatkinh::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo chất liệu mặt kính thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Chatlieumatkinh::orderbyDesc('id')->paginate(20);
    }
    public function delete($request) {
        $chatlieumatkinh = Chatlieumatkinh::where('id', $request->input('id'))->first();
        if ($chatlieumatkinh) {
            $chatlieumatkinh->delete();
            return true;
        }
        return false;
    }
    public function update($request, $chatlieumatkinh): bool {
        $chatlieumatkinh->ten = (string) $request->input('ten');
        $chatlieumatkinh->save();
        Session::flash('success', 'Cập nhật thành công chất liệu mặt kính');
        return true;
    }
}