<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chatlieuday;
use App\Http\Requests\Chatlieuday\CreateFormRequest;
use App\Http\Services\Chatlieuday\ChatlieudayService;




class ChatlieudayController extends Controller
{
    public $chatlieudayService;
    public function __construct(ChatlieudayService $chatlieudayService) {
        $this->chatlieudayService = $chatlieudayService;
    }
    public function create() {
        return view ('admin.chatlieuday.add' , [
            'title' => 'Thêm chất liệu dây mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->chatlieudayService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.chatlieuday.list', [
            'title' => 'Danh sách chất liệu dây mới nhất',
            'chatlieudays' => $this->chatlieudayService->getAll()
        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->chatlieudayService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công chất liệu dây'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Chatlieuday $chatlieuday) {
        return view('admin.chatlieuday.edit', [
            'title' => 'Chỉnh sửa chất liệu dây: ' . $chatlieuday->ten ,
            'chatlieuday' => $chatlieuday,
            'chatlieudays' => $this->chatlieudayService->getAll()
        ]);
    }
    public function update(Chatlieuday $chatlieuday, CreateFormRequest $request){
        $this->chatlieudayService->update($request, $chatlieuday);
        return redirect('/admin/chatlieudays/list');
    }
}
