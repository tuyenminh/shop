<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Product\ProductService2;


class MainController extends Controller
{
    protected $slider;
    protected $menu;
    protected $product;

    public function __construct(SliderService $slider, MenuService $menu, ProductService2 $product) {
        $this->slider = $slider;
        $this->menu = $menu;
        $this->product = $product;
    }
    public function index() {
        return view('main', [
            'title' => 'Shop nuoc hoa',
            'sliders' => $this->slider->show(),
            'menus' => $this->menu->show(),
            'products' => $this->product->get()
        ]);
    }
    public function loadproduct(Request $request) {
        $page = $request->input('page', 0);
        $result = $this->product->get($page);
        if (count($result) != 0) {
            $html = view('products.list', ['products' => $result])->render();
            return response()->json(['html' => $html]);
        }
            return response()->json(['html' => '']);
        
    }
}
