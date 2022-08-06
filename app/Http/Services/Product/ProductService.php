<?php

namespace App\Http\Services\Product;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class ProductService {
    public function getParent() {
        return Product::where('menu_id', 0)->get();
    }
    public function getAll(){
        return Product::orderbyDesc('id')->paginate(20);
    }
    public function create($request)
    {
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'menu_id' => (int) $request->input('menu_id'),
                'price' => (int) $requset->input('price'),
                'price_sale' => (int) $requset->input('price_sale'),
                'thumb' => (string) $request->input('thumb'),
                'active' => (string) $request->input('active')
            ]);
            Session::flash('success', 'Tạo sản phẩm thành công');
        }catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    
}