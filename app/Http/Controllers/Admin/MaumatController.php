<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Maumat;
use App\Http\Requests\Maumat\CreateFormRequest;
use App\Http\Services\Maumat\MaumatService;




class MaumatController extends Controller
{
    public $maumatService;
    public function __construct(MaumatService $maumatService) {
        $this->maumatService = $maumatService;
    }
    public function create() {
        return view ('admin.maumat.add' , [
            'title' => 'Thêm màu mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->maumatService->create($request);
        return redirect()->back();
    }
}
