<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dochongnuoc;
use App\Http\Requests\Dochongnuoc\CreateFormRequest;
use App\Http\Services\Dochongnuoc\DochongnuocService;




class DochongnuocController extends Controller
{
    public $dochongnuocService;
    public function __construct(DochongnuocService $dochongnuocService) {
        $this->dochongnuocService = $dochongnuocService;
    }
    public function create() {
        return view ('admin.dochongnuoc.add' , [
            'title' => 'Thêm độ chống nước mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->dochongnuocService->create($request);
        return redirect()->back();
    }
}
