<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Thuonghieu;
use App\Http\Requests\Thuonghieu\CreateFormRequest;
use App\Http\Services\Thuonghieu\ThuonghieuService;




class ThuonghieuController extends Controller
{
    public $thuonghieuService;
    public function __construct(ThuonghieuService $thuonghieuService) {
        $this->thuonghieuService = $thuonghieuService;
    }
    public function create() {
        return view ('admin.thuonghieu.add' , [
            'title' => 'Thêm thương hiêu mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->thuonghieuService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.thuonghieu.list', [
            'title' => 'Danh sách thương hiệu mới nhất',
            'thuonghieus' => $this->thuonghieuService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->thuonghieuService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công thương hiệu'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Thuonghieu $thuonghieu) {
        return view('admin.thuonghieu.edit', [
            'title' => 'Chỉnh sửa thương hiệu: ' . $thuonghieu->ten ,
            'thuonghieu' => $thuonghieu,
            'thuonghieus' => $this->thuonghieuService->getAll()
        ]);
    }
    public function update(Thuonghieu $thuonghieu, CreateFormRequest $request){
        $this->thuonghieuService->update($request, $thuonghieu);
        return redirect('/admin/thuonghieus/list');
    }
}
