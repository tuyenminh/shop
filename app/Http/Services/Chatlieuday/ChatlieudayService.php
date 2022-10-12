<?php

namespace App\Http\Services\Chatlieuday;

use App\Models\Chatlieuday;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class ChatlieudayService {
    public function create($request){
        try {
            // $data = $request->input();
            Chatlieuday::create([
                'ten'   => (string) $request->input('ten')
            ]);
            Session::flash('success', 'Tạo chất liệu dây thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Chatlieuday::orderbyDesc('id')->paginate(20);
    }

    public function delete($request) {
        $chatlieuday = Chatlieuday::where('id', $request->input('id'))->first();
        if ($chatlieuday) {
            $chatlieuday->delete();
            return true;
        }
        return false;
    }
    public function update($request, $chatlieuday): bool {
        $chatlieuday->ten = (string) $request->input('ten');
        $chatlieuday->save();
        Session::flash('success', 'Cập nhật thành công chất liệu dây');
        return true;
    }
}