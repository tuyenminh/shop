<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loaimatso;
use App\Http\Requests\Loaimatso\CreateFormRequest;
use App\Http\Services\Loaimatso\LoaimatsoService;




class LoaimatsoController extends Controller
{
    public $loaimatsoService;
    public function __construct(LoaimatsoService $loaimatsoService) {
        $this->loaimatsoService = $loaimatsoService;
    }
    public function create() {
        return view ('admin.loaimatso.add' , [
            'title' => 'Thêm loại mặt số mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->loaimatsoService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.loaimatso.list', [
            'title' => 'Danh sách loại mặt số mới nhất',
            'loaimatsos' => $this->loaimatsoService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->loaimatsoService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công loại mặt số'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Loaimatso $loaimatso) {
        return view('admin.chatlieuday.edit', [
            'title' => 'Chỉnh sửa loại mặt số: ' . $loaimatso->ten ,
            'loaimatso' => $loaimatso,
            'loaimatsos' => $this->loaimatsoService->getAll()
        ]);
    }
    public function update(Loaimatso $loaimatso, CreateFormRequest $request){
        $this->loaimatsoService->update($request, $loaimatso);
        return redirect('/admin/loaimatsos/list');
    }
}
