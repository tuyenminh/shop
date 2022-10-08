<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mauday;
use App\Http\Requests\Mauday\CreateFormRequest;
use App\Http\Services\Mauday\MaudayService;




class MaudayController extends Controller
{
    public $maudayService;
    public function __construct(MaudayService $maudayService) {
        $this->maudayService = $maudayService;
    }
    public function create() {
        return view ('admin.mauday.add' , [
            'title' => 'Thêm màu dây mới'
        ]);
    }
    public function store(CreateFormRequest $request){
        $this->maudayService->create($request);
        return redirect()->back();
    }
}
