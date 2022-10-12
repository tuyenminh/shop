<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chatlieumatkinh;
use App\Http\Requests\Chatlieumatkinh\CreateFormRequest;
use App\Http\Services\Chatlieumatkinh\ChatlieumatkinhService;




class ChatlieumatkinhController extends Controller
{
    public $chatlieumatkinhService;
    public function __construct(ChatlieumatkinhService $chatlieumatkinhService) {
        $this->chatlieumatkinhService = $chatlieumatkinhService;
    }
    public function create() {
        return view ('admin.chatlieumatkinh.add' , [
            'title' => 'Thêm chất liệu mặt kính mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->chatlieumatkinhService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.chatlieumatkinh.list', [
            'title' => 'Danh sách chất liệu mặt kính mới nhất',
            'chatlieumatkinhs' => $this->chatlieumatkinhService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->chatlieumatkinhService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công chất liệu mặt kính'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Chatlieumatkinh $chatlieumatkinh) {
        return view('admin.chatlieumatkinh.edit', [
            'title' => 'Chỉnh sửa chất liệu dây: ' . $chatlieumatkinh->ten ,
            'chatlieumatkinh' => $chatlieumatkinh,
            'chatlieumatkinhs' => $this->chatlieumatkinhService->getAll()
        ]);
    }
    public function update(Chatlieumatkinh $chatlieumatkinh, CreateFormRequest $request){
        $this->chatlieumatkinhService->update($request, $chatlieumatkinh);
        return redirect('/admin/chatlieumatkinhs/list');
    }
}
