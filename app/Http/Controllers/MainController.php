<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService2;
use App\Http\Services\Gioitinh\GioitinhService;


class MainController extends Controller
{
    protected $slider;
    protected $gioitinh;
    protected $product;

    public function __construct(SliderService $slider, GioitinhService $gioitinh, ProductService2 $product) {
        $this->slider = $slider;
        $this->gioitinh = $gioitinh;
        $this->product = $product;

    }
    public function index() {
        return view('main', [
            'title' => 'Hệ thống bán Đồng',
            'sliders' => $this->slider->show(),
            // 'menus' => $this->menu->show(),
            'gioitinhs' => $this->gioitinh->show(),
            'products' => $this->product->get()
        ]);
    }
    public function loadProduct(Request $request) {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result])->render();
             return response()->json([
                'html' => $html
            ]);
            
        }
            return response()->json(['html' => '']);
        
    }
}
