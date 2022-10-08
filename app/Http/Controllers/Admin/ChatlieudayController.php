<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chatlieuday;
use App\Http\Requests\Chatlieuday\CreateFormRequest;
use App\Http\Services\Chatlieuday\ChatlieudayService;




class ChatlieudayController extends Controller
{
    public $chatlieudayService;
    public function __construct(ChatlieudayService $chatlieudayService) {
        $this->chatlieudayService = $chatlieudayService;
    }
    public function create() {
        return view ('admin.chatlieuday.add' , [
            'title' => 'Thêm chất liệu dây mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->chatlieudayService->create($request);
        return redirect()->back();
    }
}
