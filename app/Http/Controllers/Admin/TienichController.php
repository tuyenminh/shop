<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tienich;
use App\Http\Requests\Tienich\CreateFormRequest;
use App\Http\Services\Tienich\TienichService;




class TienichController extends Controller
{
    public $tienichService;
    public function __construct(TienichService $tienichService) {
        $this->tienichService = $tienichService;
    }
    public function create() {
        return view ('admin.tienich.add' , [
            'title' => 'Thêm tiện ích mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->tienichService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.tienich.list', [
            'title' => 'Danh sách chất liệu dây mới nhất',
            'tienichs' => $this->tienichService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->tienichService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công tiện ích'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Tienich $tienich) {
        return view('admin.tienich.edit', [
            'title' => 'Chỉnh sửa chất liệu dây: ' . $tienich->ten ,
            'tienich' => $tienich,
            'tienichs' => $this->tienichService->getAll()
        ]);
    }
    public function update(Tienich $tienich, CreateFormRequest $request){
        $this->tienichService->update($request, $tienich);
        return redirect('/admin/tienichs/list');
    }
}
