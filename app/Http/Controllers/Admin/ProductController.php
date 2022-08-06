<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\CreateFormRequest;
use App\Http\Services\Product\ProductService;

class ProductController extends Controller
{
    public $productService;
    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }
    public function index()
    {
        //
    }

    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm mới',
            'products' => $this->productService->getParent()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFormRequest $request)
    {
        $this->productService->create($request);
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
