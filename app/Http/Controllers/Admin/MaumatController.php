<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Maumat;
use App\Http\Requests\Maumat\CreateFormRequest;
use App\Http\Services\Maumat\MaumatService;




class MaumatController extends Controller
{
    public $maumatService;
    public function __construct(MaumatService $maumatService) {
        $this->maumatService = $maumatService;
    }
    public function create() {
        return view ('admin.maumat.add' , [
            'title' => 'Thêm màu mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->maumatService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.maumat.list', [
            'title' => 'Danh sách màu mặt mới nhất',
            'maumats' => $this->maumatService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->maumatService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công màu mặt'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Maumat $maumat) {
        return view('admin.maumat.edit', [
            'title' => 'Chỉnh sửa màu mặt: ' . $maumat->ten ,
            'maumat' => $maumat,
            'maumats' => $this->maumatService->getAll()
        ]);
    }
    public function update(Maumat $maumat, CreateFormRequest $request){
        $this->maumatService->update($request, $maumat);
        return redirect('/admin/maumats/list');
    }
}
