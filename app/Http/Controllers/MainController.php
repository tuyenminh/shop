<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Slider\SliderService;
use App\Http\Services\Menu\MenuService;


class MainController extends Controller
{
    protected $slider;
    protected $menu;

    public function __construct(SliderService $slider, MenuService $menu) {
        $this->slider = $slider;
        $this->menu = $menu;
    }
    public function index() {
        return view('main', [
            'title' => 'Shop nuoc hoa',
            // 'slider' => $this->slider->show(),
            'menus' => $this->menu->show(),
        ]);
    }
}
