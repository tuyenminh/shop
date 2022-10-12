<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loaimay;
use App\Http\Requests\Loaimay\CreateFormRequest;
use App\Http\Services\Loaimay\LoaimayService;




class LoaimayController extends Controller
{
    public $loaimayService;
    public function __construct(LoaimayService $loaimayService) {
        $this->loaimayService = $loaimayService;
    }
    public function create() {
        return view ('admin.loaimay.add' , [
            'title' => 'Thêm loại máy  mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->loaimayService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.loaimay.list', [
            'title' => 'Danh sách loại máy mới nhất',
            'loaimays' => $this->loaimayService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->loaimayService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công loại máy'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Loaimay $loaimay) {
        return view('admin.loaimay.edit', [
            'title' => 'Chỉnh sửa loại máy: ' . $loaimay->ten ,
            'loaimay' => $loaimay,
            'loaimays' => $this->loaimayService->getAll()
        ]);
    }
    public function update(Loaimay $loaimay, CreateFormRequest $request){
        $this->loaimayService->update($request, $loaimay);
        return redirect('/admin/loaimays/list');
    }
}
