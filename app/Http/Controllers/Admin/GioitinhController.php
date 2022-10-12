<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gioitinh;
use App\Http\Requests\Gioitinh\CreateFormRequest;
use App\Http\Services\Gioitinh\GioitinhService;




class GioitinhController extends Controller
{
    public $gioitinhService;
    public function __construct(GioitinhService $gioitinhService) {
        $this->gioitinhService = $gioitinhService;
    }
    public function create() {
        return view ('admin.gioitinh.add' , [
            'title' => 'Thêm giới tính mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->gioitinhService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.gioitinh.list', [
            'title' => 'Danh sách giới tính mới nhất',
            'gioitinhs' => $this->gioitinhService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->gioitinhService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công giới tính'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Gioitinh $gioitinh) {
        return view('admin.gioitinh.edit', [
            'title' => 'Chỉnh sửa giới tính: ' . $gioitinh->ten ,
            'gioitinh' => $gioitinh,
            'gioitinhs' => $this->gioitinhService->getAll()
        ]);
    }
    public function update(Gioitinh $gioitinh, CreateFormRequest $request){
        $this->gioitinhService->update($request, $gioitinh);
        return redirect('/admin/gioitinhs/list');
    }
    
}
