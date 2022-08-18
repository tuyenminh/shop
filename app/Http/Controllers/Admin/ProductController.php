<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\ProductRequest;
use App\Http\Services\Product\ProductService;
use Illuminate\Http\Response;
use App\Models\Product;


class ProductController extends Controller
{
    public $productService;
    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }
    public function index()
    {
        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm',
            'products' => $this->productService->get()
        ]);
    }

    public function create()
    {
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm mới',
            'menus' => $this->productService->getMenu()
        ]);
    }
    public function store(ProductRequest $request)
    {
        $this->productService->insert($request);
        return redirect()->back();
    }

    public function show(Product $product)
    {
       return view('admin.product.edit',[
        'title' => 'Chỉnh sửa sản phẩm',
        'product' => $product,
        'menus' => $this->productService->getMenu()
        ]); 
    }

    public function edit(Request $request, Product $product)
    {
        $this->productService->update($request, $product);
    }

    public function update(Request $request, Product $product) {
        $result = $this->productService->update($request, $product);
        if ($result) {
            return redirect('/admin/products/list');
        }
        return redirect()->back();
    }
        
    public function destroy(Request $request)
    {
        $result = $this->productService->delete($request);
        if ($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công sản phẩm'
            ]);
        }
        return response()->json(['error' => true]);
    }
}
