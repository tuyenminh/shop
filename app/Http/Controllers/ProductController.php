<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Product\ProductService2;
class ProductController extends Controller
{
    protected $productServer2;
    public function __construct(ProductService2 $productServer2) {
        $this->productServer2 = $productServer2;
    }
    public function index($id = '', $slug = ''){
        $product = $this->productServer2->show($id);
    }
}
