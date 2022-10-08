<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loaimay;
use App\Http\Requests\Loaimay\CreateFormRequest;
use App\Http\Services\Loaimay\LoaimayService;




class LoaimayController extends Controller
{
    public $loaimayService;
    public function __construct(LoaimayService $loaimayService) {
        $this->loaimayService = $loaimayService;
    }
    public function create() {
        return view ('admin.loaimay.add' , [
            'title' => 'Thêm loại máy  mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->loaimayService->create($request);
        return redirect()->back();
    }
}
