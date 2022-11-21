<?php
namespace App\Http\Services\Hinhanh;

use App\Models\Hinhanh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Dongho;

class HinhanhService {
    public function getDongho() {
        return Dongho::where(null)->get();
    }
    public function create($request) {
        try {
            
            Hinhanh::create([
                'dh_ma'   => (string) $request->input('dh_ma'),
                'thumb' => (string) $request->input('thumb'),
            ]);
        
            Session::flash('success', 'Thêm hình ảnh mới thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm hình ảnh mới không thành công');
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function getAll() {
        return Hinhanh::orderByDesc('id')->paginate(15);
    }
    public function update($request, $hinhanh) {
        try {
            $hinhanh->fill($request->input());
            $hinhanh->save();
            Session::flash('success', 'Cập nhật hình ảnh mới thành công'); 
        } catch (\Exception $err) {
            Session::flash('error', 'Cập nhật hình ảnh không thành công'); 
            Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function destroy ($request) {
        $hinhanh = Hinhanh::where('id', $request->input('id'))->first();
        if ($hinhanh) {
            $path = str_replace('storage', 'public', $hinhanh->thumb);
            Storage::delete($path);
            $hinhanh->delete();
            return true;
        }
        return false;
    }
    public function show() {
        return Hinhanh::orderByDesc('id')->get();
    }

}