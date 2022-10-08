<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kieumat;
use App\Http\Requests\Kieumat\CreateFormRequest;
use App\Http\Services\Kieumat\KieumatService;




class KieumatController extends Controller
{
    public $kieumatService;
    public function __construct(KieumatService $kieumatService) {
        $this->kieumatService = $kieumatService;
    }
    public function create() {
        return view ('admin.kieumat.add' , [
            'title' => 'Thêm kiểu mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->kieumatService->create($request);
        return redirect()->back();
    }
}
