<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Loaidongho;
use App\Http\Requests\Loaidongho\CreateFormRequest;
use App\Http\Services\Loaidongho\LoaidonghoService;




class LoaidonghoController extends Controller
{
    public $loaidonghoService;
    public function __construct(LoaidonghoService $loaidonghoService) {
        $this->loaidonghoService = $loaidonghoService;
    }
    public function create() {
        return view ('admin.loaidongho.add' , [
            'title' => 'Thêm loại đồng hồ mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->loaidonghoService->create($request);
        return redirect()->back();
    }
}
