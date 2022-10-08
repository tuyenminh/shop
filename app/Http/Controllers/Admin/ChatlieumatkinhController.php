<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chatlieumatkinh;
use App\Http\Requests\Chatlieumatkinh\CreateFormRequest;
use App\Http\Services\Chatlieumatkinh\ChatlieumatkinhService;




class ChatlieumatkinhController extends Controller
{
    public $chatlieumatkinhService;
    public function __construct(ChatlieumatkinhService $chatlieumatkinhService) {
        $this->chatlieumatkinhService = $chatlieumatkinhService;
    }
    public function create() {
        return view ('admin.chatlieumatkinh.add' , [
            'title' => 'Thêm chất liệu mặt kính mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->chatlieumatkinhService->create($request);
        return redirect()->back();
    }
}
