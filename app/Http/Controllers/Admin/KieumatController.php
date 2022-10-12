<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kieumat;
use App\Http\Requests\Kieumat\CreateFormRequest;
use App\Http\Services\Kieumat\KieumatService;




class KieumatController extends Controller
{
    public $kieumatService;
    public function __construct(KieumatService $kieumatService) {
        $this->kieumatService = $kieumatService;
    }
    public function create() {
        return view ('admin.kieumat.add' , [
            'title' => 'Thêm kiểu mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->kieumatService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.kieumat.list', [
            'title' => 'Danh sách kiểu mặt mới nhất',
            'kieumats' => $this->kieumatService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->kieumatService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công kiểu mặt'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Kieumat $kieumat) {
        return view('admin.kieumat.edit', [
            'title' => 'Chỉnh sửa kiểu mặt: ' . $kieumat->ten ,
            'kieumat' => $kieumat,
            'kieumats' => $this->kieumatService->getAll()
        ]);
    }
    public function update(Kieumat $kieumat, CreateFormRequest $request){
        $this->kieumatService->update($request, $kieumat);
        return redirect('/admin/kieumats/list');
    }
}
