<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Duongkinhmat;
use App\Http\Requests\Duongkinhmat\CreateFormRequest;
use App\Http\Services\Duongkinhmat\DuongkinhmatService;




class DuongkinhmatController extends Controller
{
    public $duongkinhmatService;
    public function __construct(DuongkinhmatService $duongkinhmatService) {
        $this->duongkinhmatService = $duongkinhmatService;
    }
    public function create() {
        return view ('admin.duongkinhmat.add' , [
            'title' => 'Thêm đường kính mặt mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->duongkinhmatService->create($request);
        return redirect()->back();
    }
}
