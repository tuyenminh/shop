<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Duongkinhmat;
use App\Http\Requests\Duongkinhmat\CreateFormRequest;
use App\Http\Services\Duongkinhmat\DuongkinhmatService;




class DuongkinhmatController extends Controller
{
    public $duongkinhmatService;
    public function __construct(DuongkinhmatService $duongkinhmatService) {
        $this->duongkinhmatService = $duongkinhmatService;
    }
    public function create() {
        return view ('admin.duongkinhmat.add' , [
            'title' => 'Thêm đường kính mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->duongkinhmatService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.duongkinhmat.list', [
            'title' => 'Danh sách đường kính mặt mới nhất',
            'duongkinhmats' => $this->duongkinhmatService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->duongkinhmatService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công đường kính mặt'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Duongkinhmat $duongkinhmat) {
        return view('admin.duongkinhmat.edit', [
            'title' => 'Chỉnh sửa đường kính mặt: ' . $duongkinhmat->ten ,
            'duongkinhmat' => $duongkinhmat,
            'duongkinhmats' => $this->duongkinhmatService->getAll()
        ]);
    }
    public function update(Duongkinhmat $duongkinhmat, CreateFormRequest $request){
        $this->duongkinhmatService->update($request, $duongkinhmat);
        return redirect('/admin/duongkinhmats/list');
    }
}
