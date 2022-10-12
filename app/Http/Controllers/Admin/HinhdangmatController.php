<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hinhdangmat;
use App\Http\Requests\Hinhdangmat\CreateFormRequest;
use App\Http\Services\Hinhdangmat\HinhdangmatService;




class HinhdangmatController extends Controller
{
    public $hinhdangmatService;
    public function __construct(HinhdangmatService $hinhdangmatService) {
        $this->hinhdangmatService = $hinhdangmatService;
    }
    public function create() {
        return view ('admin.hinhdangmat.add' , [
            'title' => 'Thêm hình dáng mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->hinhdangmatService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.hinhdangmat.list', [
            'title' => 'Danh sách hình dáng mặt mới nhất',
            'hinhdangmats' => $this->hinhdangmatService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->hinhdangmatService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công hình dáng mặt'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Hinhdangmat $hinhdangmat) {
        return view('admin.hinhdangmat.edit', [
            'title' => 'Chỉnh sửa chất liệu dây: ' . $hinhdangmat->ten ,
            'hinhdangmat' => $hinhdangmat,
            'hinhdangmats' => $this->hinhdangmatService->getAll()
        ]);
    }
    public function update(Hinhdangmat $hinhdangmat, CreateFormRequest $request){
        $this->hinhdangmatService->update($request, $hinhdangmat);
        return redirect('/admin/hinhdangmats/list');
    }
}
