<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dongho\DonghoRequest;
use App\Http\Services\Dongho\DonghoService;
use Illuminate\Http\Response;
use App\Models\Dongho;

class DonghoController extends Controller {
    public $donghoService;
    public function __construct(DonghoService $donghoService) {
        $this->donghoService = $donghoService;
    }
    public function index()
    {
        return view('admin.dongho.list', [
            'title' => 'Danh sách đồng hồ',
            'donghos' => $this->donghoService->getAll()
        ]);
    }

    public function create()
    {
        return view('admin.dongho.add', [
            'title' => 'Thêm đồng hồ mới',
            'chatlieudays' => $this->donghoService->getChatlieuday(),
            'chatlieumatkinhs' => $this->donghoService->getChatlieumatkinh(),
            'dochongnuocs' => $this->donghoService->getDochongnuoc(),
            'duongkinhmats' => $this->donghoService->getDuongkinhmat(),
            'gioitinhs' => $this->donghoService->getGioitinh(),
            'hinhdangmats' => $this->donghoService->getHinhdangmat(),
            'kieumats' => $this->donghoService->getKieumat(),
            'loaidonghos' => $this->donghoService->getLoaidongho(),
            'loaimatsos' => $this->donghoService->getLoaimatso(),
            'loaimays' => $this->donghoService->getLoaimay(),
            'maudays' => $this->donghoService->getMauday(),
            'maumats' => $this->donghoService->getMaumat(),
            'phongcachs' => $this->donghoService->getPhongcach(),
            'thuonghieus' => $this->donghoService->getThuonghieu(),
            'tienichs' => $this->donghoService->getTienich()

        ]);
    }
    public function store(DonghoRequest $request)
    {
        $this->donghoService->create($request);
        return redirect()->back();
    }
    public function show(Dongho $dongho)
    {
       return view('admin.dongho.edit',[
            'title' => 'Chỉnh sửa đồng hồ',
            'dongho' => $dongho,
            'donghos' => $this->donghoService->getAll(),
            'chatlieudays' => $this->donghoService->getChatlieuday(),
            'chatlieumatkinhs' => $this->donghoService->getChatlieumatkinh(),
            'dochongnuocs' => $this->donghoService->getDochongnuoc(),
            'duongkinhmats' => $this->donghoService->getDuongkinhmat(),
            'gioitinhs' => $this->donghoService->getGioitinh(),
            'hinhdangmats' => $this->donghoService->getHinhdangmat(),
            'kieumats' => $this->donghoService->getKieumat(),
            'loaidonghos' => $this->donghoService->getLoaidongho(),
            'loaimatsos' => $this->donghoService->getLoaimatso(),
            'loaimays' => $this->donghoService->getLoaimay(),
            'maudays' => $this->donghoService->getMauday(),
            'maumats' => $this->donghoService->getMaumat(),
            'phongcachs' => $this->donghoService->getPhongcach(),
            'thuonghieus' => $this->donghoService->getThuonghieu(),
            'tienichs' => $this->donghoService->getTienich()
        ]); 
    }
     public function edit(Request $request, Dongho $dongho)
    {
        $this->donghoService->update($request, $dongho);
    }

    public function update(Request $request, Dongho $dongho) {
        $result = $this->donghoService->update($request, $dongho);
        if ($result) {
            return redirect('/admin/donghos/list');
        }
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $result = $this->donghoService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công đồng hồ'
            ]);
        }
        return response()->json(['error' => true]);
    }
   
}