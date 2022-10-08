<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Thuonghieu;
use App\Http\Requests\Thuonghieu\CreateFormRequest;
use App\Http\Services\Thuonghieu\ThuonghieuService;




class ThuonghieuController extends Controller
{
    public $thuonghieuService;
    public function __construct(ThuonghieuService $thuonghieuService) {
        $this->thuonghieuService = $thuonghieuService;
    }
    public function create() {
        return view ('admin.thuonghieu.add' , [
            'title' => 'Thêm thương hiêu mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->thuonghieuService->create($request);
        return redirect()->back();
    }
}
