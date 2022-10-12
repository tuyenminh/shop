<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dochongnuoc;
use App\Http\Requests\Dochongnuoc\CreateFormRequest;
use App\Http\Services\Dochongnuoc\DochongnuocService;




class DochongnuocController extends Controller
{
    public $dochongnuocService;
    public function __construct(DochongnuocService $dochongnuocService) {
        $this->dochongnuocService = $dochongnuocService;
    }
    public function create() {
        return view ('admin.dochongnuoc.add' , [
            'title' => 'Thêm độ chống nước mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->dochongnuocService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.dochongnuoc.list', [
            'title' => 'Danh sách độ chống nước mới nhất',
            'dochongnuocs' => $this->dochongnuocService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->dochongnuocService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công độ chống nước'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Dochongnuoc $dochongnuoc) {
        return view('admin.dochongnuoc.edit', [
            'title' => 'Chỉnh sửa độ chống nước: ' . $dochongnuoc->ten ,
            'dochongnuoc' => $dochongnuoc,
            'dochongnuocs' => $this->dochongnuocService->getAll()
        ]);
    }
    public function update(Dochongnuoc $dochongnuoc, CreateFormRequest $request){
        $this->dochongnuocService->update($request, $dochongnuoc);
        return redirect('/admin/dochongnuocs/list');
    }
}