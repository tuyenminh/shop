<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loaimatso;
use App\Http\Requests\Loaimatso\CreateFormRequest;
use App\Http\Services\Loaimatso\LoaimatsoService;




class LoaimatsoController extends Controller
{
    public $loaimatsoService;
    public function __construct(LoaimatsoService $loaimatsoService) {
        $this->loaimatsoService = $loaimatsoService;
    }
    public function create() {
        return view ('admin.loaimatso.add' , [
            'title' => 'Thêm loại mặt số mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->loaimatsoService->create($request);
        return redirect()->back();
    }
}
