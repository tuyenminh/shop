<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hinhdangmat;
use App\Http\Requests\Hinhdangmat\CreateFormRequest;
use App\Http\Services\Hinhdangmat\HinhdangmatService;




class HinhdangmatController extends Controller
{
    public $hinhdangmatService;
    public function __construct(HinhdangmatService $hinhdangmatService) {
        $this->hinhdangmatService = $hinhdangmatService;
    }
    public function create() {
        return view ('admin.hinhdangmat.add' , [
            'title' => 'Thêm hình dáng mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->hinhdangmatService->create($request);
        return redirect()->back();
    }
}
