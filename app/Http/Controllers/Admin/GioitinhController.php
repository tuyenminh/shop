<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gioitinh;
use App\Http\Requests\Gioitinh\CreateFormRequest;
use App\Http\Services\Gioitinh\GioitinhService;




class GioitinhController extends Controller
{
    public $gioitinhService;
    public function __construct(GioitinhService $gioitinhService) {
        $this->gioitinhService = $gioitinhService;
    }
    public function create() {
        return view ('admin.gioitinh.add' , [
            'title' => 'Thêm giới tính mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->gioitinhService->create($request);
        return redirect()->back();
    }
}
