<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loaidongho;
use App\Http\Requests\Loaidongho\CreateFormRequest;
use App\Http\Services\Loaidongho\LoaidonghoService;




class LoaidonghoController extends Controller
{
    public $loaidonghoService;
    public function __construct(LoaidonghoService $loaidonghoService) {
        $this->loaidonghoService = $loaidonghoService;
    }
    public function create() {
        return view ('admin.loaidongho.add' , [
            'title' => 'Thêm loại đồng hồ mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->loaidonghoService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.loaidongho.list', [
            'title' => 'Danh sách loại đồng hồ mới nhất',
            'loaidonghos' => $this->loaidonghoService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->loaidonghoService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công loại đồng hồ'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Loaidongho $loaidongho) {
        return view('admin.loaidongho.edit', [
            'title' => 'Chỉnh sửa loại đồng hồ: ' . $loaidongho->ten ,
            'loaidongho' => $loaidongho,
            'loaidonghos' => $this->loaidonghoService->getAll()
        ]);
    }
    public function update(Loaidongho $loaidongho, CreateFormRequest $request){
        $this->loaidonghoService->update($request, $loaidongho);
        return redirect('/admin/loaidonghos/list');
    }
}
