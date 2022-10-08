<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tienich;
use App\Http\Requests\Tienich\CreateFormRequest;
use App\Http\Services\Tienich\TienichService;




class TienichController extends Controller
{
    public $tienichService;
    public function __construct(TienichService $tienichService) {
        $this->tienichService = $tienichService;
    }
    public function create() {
        return view ('admin.tienich.add' , [
            'title' => 'Thêm tiện ích mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->tienichService->create($request);
        return redirect()->back();
    }
}
