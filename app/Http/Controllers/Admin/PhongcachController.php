<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Phongcach;
use App\Http\Requests\Phongcach\CreateFormRequest;
use App\Http\Services\Phongcach\PhongcachService;




class PhongcachController extends Controller
{
    public $phongcachService;
    public function __construct(PhongcachService $phongcachService) {
        $this->phongcachService = $phongcachService;
    }
    public function create() {
        return view ('admin.phongcach.add' , [
            'title' => 'Thêm phong cách mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->phongcachService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.phongcach.list', [
            'title' => 'Danh sách phong cách mới nhất',
            'phongcachs' => $this->phongcachService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->phongcachService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công phong cách'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Phongcach $phongcach) {
        return view('admin.phongcach.edit', [
            'title' => 'Chỉnh sửa phong cách: ' . $phongcach->ten ,
            'phongcach' => $phongcach,
            'phongcachs' => $this->phongcachService->getAll()
        ]);
    }
    public function update(Phongcach $phongcach, CreateFormRequest $request){
        $this->phongcachService->update($request, $phongcach);
        return redirect('/admin/phongcachs/list');
    }
}
