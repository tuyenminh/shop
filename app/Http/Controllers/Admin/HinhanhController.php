<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Hinhanh\HinhanhService;
use App\Http\Requests\Hinhanh\HinhanhRequest;
use App\Models\Hinhanh;


class HinhanhController extends Controller
{
    public $hinhanh;
    public function __construct(HinhanhService $hinhanh) {
        $this->hinhanh = $hinhanh;
    }
    public function create(){
        return view ('admin.hinhanh.add', [
            'title' => 'Thêm hình ảnh mới',
            'donghos' => $this->hinhanh->getDongho()
        ]);
    }
    public function store(HinhanhRequest $request) { 
        $this->hinhanh->create($request);
        return redirect()->back();
    }

    public function index() {
        return view('admin.hinhanh.list', [
            'title' => 'Danh sách hình ảnh mới nhất',
            'hinhanhs' => $this->hinhanh->getAll()
        ]);
    }
    public function show(Hinhanh $hinhanh) {
        return view('admin.hinhanh.edit', [
            'title' => 'Chỉnh sửa hình ảnh',
            'hinhanh' => $hinhanh,
            'hinhanhs' => $this->hinhanh->getAll(),
            'donghos' => $this->hinhanh->getDongho()
        ]);
    }
    public function update(Request $request, Hinhanh $hinhanh) {
        $this->validate($request, [
            'thumb' => 'required'
        ]);
        $result = $this->hinhanh->update($request, $hinhanh);
        if ($result) {
            return redirect('/admin/hinhanhs/list');
        }
        return redirect()->back();
    }
    public function destroy (Request $request) {
        $result = $this->slider->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }

}
