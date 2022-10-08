<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Phongcach;
use App\Http\Requests\Phongcach\CreateFormRequest;
use App\Http\Services\Phongcach\PhongcachService;




class PhongcachController extends Controller
{
    public $phongcachService;
    public function __construct(PhongcachService $phongcachService) {
        $this->phongcachService = $phongcachService;
    }
    public function create() {
        return view ('admin.phongcach.add' , [
            'title' => 'Thêm phong cách mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->phongcachService->create($request);
        return redirect()->back();
    }
}
