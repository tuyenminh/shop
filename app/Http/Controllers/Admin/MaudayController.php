<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mauday;
use App\Http\Requests\Mauday\CreateFormRequest;
use App\Http\Services\Mauday\MaydayService;




class MaudayController extends Controller
{
    public $maudayService;
    public function __construct(MaydayService $maudayService) {
        $this->maudayService = $maudayService;
    }
    public function create() {
        return view ('admin.mauday.add' , [
            'title' => 'Thêm màu dây mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->maudayService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.mauday.list', [
            'title' => 'Danh sách màu dây mới nhất',
            'maudays' => $this->maudayService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->maudayService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công màu dây'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Mauday $mauday) {
        return view('admin.mauday.edit', [
            'title' => 'Chỉnh sửa màu dây: ' . $mauday->ten ,
            'mauday' => $mauday,
            'maudays' => $this->maudayService->getAll()
        ]);
    }
    public function update(Mauday $mauday, CreateFormRequest $request){
        $this->maudayService->update($request, $mauday);
        return redirect('/admin/maudays/list');
    }
}
