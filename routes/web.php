<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ChatlieudayController;
use App\Http\Controllers\Admin\ChatlieumatkinhController;
use App\Http\Controllers\Admin\DochongnuocController;
use App\Http\Controllers\Admin\DuongkinhmatController;
use App\Http\Controllers\Admin\GioitinhController;
use App\Http\Controllers\Admin\HinhdangmatController;
use App\Http\Controllers\Admin\KieumatController;
use App\Http\Controllers\Admin\LoaidonghoController;
use App\Http\Controllers\Admin\LoaimatsoController;
use App\Http\Controllers\Admin\LoaimayController;
use App\Http\Controllers\Admin\MaudayController;
use App\Http\Controllers\Admin\MaumatController;
use App\Http\Controllers\Admin\PhongcachController;
use App\Http\Controllers\Admin\ThuonghieuController;
use App\Http\Controllers\Admin\TienichController;
use App\Http\Controllers\Admin\DonghoController;
use App\Http\Controllers\Admin\HinhanhController;




Route::get('/admin/users/login', [LoginController::class, 'index'])->name('login');

Route::post('/admin/users/login/store', [LoginController::class, 'store'])->name('shop');

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function(){
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main', [MainController::class, 'index']);   

        #Menu
        Route::prefix('menus')->group(function(){
            Route::get('add', [MenuController::class, 'create']);
            Route::post('add', [MenuController::class, 'store']);
            Route::get('list', [MenuController::class, 'index']);
            Route::post('edit/{menu}', [MenuController::class, 'update']);
            Route::get('edit/{menu}', [MenuController::class, 'show']);
            Route::DELETE('destroy', [MenuController::class, 'destroy']);
        });
        #Chatlieuday
        Route::prefix('chatlieudays')->group(function(){
            Route::get('add', [ChatlieudayController::class, 'create']);
            Route::post('add', [ChatlieudayController::class, 'store']);
            Route::get('list', [ChatlieudayController::class, 'index']);
            Route::post('edit/{chatlieuday}', [ChatlieudayController::class, 'update']);
            Route::get('edit/{chatlieuday}', [ChatlieudayController::class, 'show']);
            Route::DELETE('destroy', [ChatlieudayController::class, 'destroy']);
        });
        #Chatlieumatkinh 
        Route::prefix('chatlieumatkinhs')->group(function(){
            Route::get('add', [ChatlieumatkinhController::class, 'create']);
            Route::post('add', [ChatlieumatkinhController::class, 'store']);
            Route::get('list', [ChatlieumatkinhController::class, 'index']);
            Route::post('edit/{chatlieumatkinh}', [ChatlieumatkinhController::class, 'update']);
            Route::get('edit/{chatlieumatkinh}', [ChatlieumatkinhController::class, 'show']);
            Route::DELETE('destroy', [ChatlieumatkinhController::class, 'destroy']);
        });
        #Dochongnuoc
        Route::prefix('dochongnuocs')->group(function(){
            Route::get('add', [DochongnuocController::class, 'create']);
            Route::post('add', [DochongnuocController::class, 'store']);
            Route::get('list', [DochongnuocController::class, 'index']);
            Route::post('edit/{dochongnuoc}', [DochongnuocController::class, 'update']);
            Route::get('edit/{dochongnuoc}', [DochongnuocController::class, 'show']);
            Route::DELETE('destroy', [DochongnuocController::class, 'destroy']);
        });
        #Duongkinhmat
        Route::prefix('duongkinhmats')->group(function(){
            Route::get('add', [DuongkinhmatController::class, 'create']);
            Route::post('add', [DuongkinhmatController::class, 'store']);
            Route::get('list', [DuongkinhmatController::class, 'index']);
            Route::post('edit/{duongkinhmat}', [DuongkinhmatController::class, 'update']);
            Route::get('edit/{duongkinhmat}', [DuongkinhmatController::class, 'show']);
            Route::DELETE('destroy', [DuongkinhmatController::class, 'destroy']);
        });
         #Gioitinh
         Route::prefix('gioitinhs')->group(function(){
            Route::get('add', [GioitinhController::class, 'create']);
            Route::post('add', [GioitinhController::class, 'store']);
            Route::get('list', [GioitinhController::class, 'index']);
            Route::post('edit/{gioitinh}', [GioitinhController::class, 'update']);
            Route::get('edit/{gioitinh}', [GioitinhController::class, 'show']);
            Route::DELETE('destroy', [GioitinhController::class, 'destroy']);
        });
         #Hinhdangmat
         Route::prefix('hinhdangmats')->group(function(){
            Route::get('add', [HinhdangmatController::class, 'create']);
            Route::post('add', [HinhdangmatController::class, 'store']);
            Route::get('list', [HinhdangmatController::class, 'index']);
            Route::post('edit/{hinhdangmat}', [HinhdangmatController::class, 'update']);
            Route::get('edit/{hinhdangmat}', [HinhdangmatController::class, 'show']);
            Route::DELETE('destroy', [HinhdangmatController::class, 'destroy']);
        });
        #Kieumat
        Route::prefix('kieumats')->group(function(){
            Route::get('add', [KieumatController::class, 'create']);
            Route::post('add', [KieumatController::class, 'store']);
            Route::get('list', [KieumatController::class, 'index']);
            Route::post('edit/{kieumat}', [KieumatController::class, 'update']);
            Route::get('edit/{kieumat}', [KieumatController::class, 'show']);
            Route::DELETE('destroy', [KieumatController::class, 'destroy']);
        });
        #Loaidongho
        Route::prefix('loaidonghos')->group(function(){
            Route::get('add', [LoaidonghoController::class, 'create']);
            Route::post('add', [LoaidonghoController::class, 'store']);
            Route::get('list', [LoaidonghoController::class, 'index']);
            Route::post('edit/{loaidongho}', [LoaidonghoController::class, 'update']);
            Route::get('edit/{loaidongho}', [LoaidonghoController::class, 'show']);
            Route::DELETE('destroy', [LoaidonghoController::class, 'destroy']);
        });
        #Loaimatso
        Route::prefix('loaimatsos')->group(function(){
            Route::get('add', [LoaimatsoController::class, 'create']);
            Route::post('add', [LoaimatsoController::class, 'store']);
            Route::get('list', [LoaimatsoController::class, 'index']);
            Route::post('edit/{loaimatso}', [LoaimatsoController::class, 'update']);
            Route::get('edit/{loaimatso}', [LoaimatsoController::class, 'show']);
            Route::DELETE('destroy', [LoaimatsoController::class, 'destroy']);
        });
        #Loaimay
        Route::prefix('loaimays')->group(function(){
            Route::get('add', [LoaimayController::class, 'create']);
            Route::post('add', [LoaimayController::class, 'store']);
            Route::get('list', [LoaimayController::class, 'index']);
            Route::post('edit/{loaimay}', [LoaimayController::class, 'update']);
            Route::get('edit/{loaimay}', [LoaimayController::class, 'show']);
            Route::DELETE('destroy', [LoaimayController::class, 'destroy']);
        });
         #Mauday
         Route::prefix('maudays')->group(function(){
            Route::get('add', [MaudayController::class, 'create']);
            Route::post('add', [MaudayController::class, 'store']);
            Route::get('list', [MaudayController::class, 'index']);
            Route::post('edit/{mauday}', [MaudayController::class, 'update']);
            Route::get('edit/{mauday}', [MaudayController::class, 'show']);
            Route::DELETE('destroy', [MaudayController::class, 'destroy']);
        });
         #Maumat
         Route::prefix('maumats')->group(function(){
            Route::get('add', [MaumatController::class, 'create']);
            Route::post('add', [MaumatController::class, 'store']);
            Route::get('list', [MaumatController::class, 'index']);
            Route::post('edit/{maumat}', [MaumatController::class, 'update']);
            Route::get('edit/{maumat}', [MaumatController::class, 'show']);
            Route::DELETE('destroy', [MaumatController::class, 'destroy']);
        });
          #Phongcach
          Route::prefix('phongcachs')->group(function(){
            Route::get('add', [PhongcachController::class, 'create']);
            Route::post('add', [PhongcachController::class, 'store']);
            Route::get('list', [PhongcachController::class, 'index']);
            Route::post('edit/{phongcach}', [PhongcachController::class, 'update']);
            Route::get('edit/{phongcach}', [PhongcachController::class, 'show']);
            Route::DELETE('destroy', [PhongcachController::class, 'destroy']);
        });
          #Thuonghieu
          Route::prefix('thuonghieus')->group(function(){
            Route::get('add', [ThuonghieuController::class, 'create']);
            Route::post('add', [ThuonghieuController::class, 'store']);
            Route::get('list', [ThuonghieuController::class, 'index']);
            Route::post('edit/{thuonghieu}', [ThuonghieuController::class, 'update']);
            Route::get('edit/{thuonghieu}', [ThuonghieuController::class, 'show']);
            Route::DELETE('destroy', [ThuonghieuController::class, 'destroy']);
        });
        #Tienich
        Route::prefix('tienichs')->group(function(){
            Route::get('add', [TienichController::class, 'create']);
            Route::post('add', [TienichController::class, 'store']);
            Route::get('list', [TienichController::class, 'index']);
            Route::post('edit/{tienich}', [TienichController::class, 'update']);
            Route::get('edit/{tienich}', [TienichController::class, 'show']);
            Route::DELETE('destroy', [TienichController::class, 'destroy']);
        });
        #Dongho
        Route::prefix('donghos')->group(function() {
            Route::get('add', [DonghoController::class, 'create']);
            Route::post('add', [DonghoController::class, 'store']);
            Route::get('list', [DonghoController::class, 'index']);
            Route::get('edit/{dongho}', [DonghoController::class, 'show']);
            Route::post('edit/{dongho}', [DonghoController::class, 'update']);
            Route::DELETE('destroy', [DonghoController::class, 'destroy']);
        });
        #Product
        Route::prefix('products')->group(function() {
            Route::get('add', [ProductController::class, 'create']);
            Route::post('add', [ProductController::class, 'store']);
            Route::get('list', [ProductController::class, 'index']);
            Route::get('edit/{product}', [ProductController::class, 'show']);
            Route::post('edit/{product}', [ProductController::class, 'update']);
            Route::DELETE('destroy', [ProductController::class, 'destroy']);
        });
        #Slider
        Route::prefix('sliders')->group(function() {
            Route::get('add', [SliderController::class, 'create']);
            Route::post('add', [SliderController::class, 'store']);
            Route::get('list', [SliderController::class, 'index']);
            Route::get('edit/{slider}', [SliderController::class, 'show']);
            Route::post('edit/{slider}', [SliderController::class, 'update']);
            Route::DELETE('destroy', [SliderController::class, 'destroy']);
        });
        #Hinhanh
        Route::prefix('hinhanhs')->group(function() {
            Route::get('add', [HinhanhController::class, 'create']);
            Route::post('add', [HinhanhController::class, 'store']);
            Route::get('list', [HinhanhController::class, 'index']);
            Route::get('edit/{hinhanh}', [HinhanhController::class, 'show']);
            Route::post('edit/{hinhanh}', [HinhanhController::class, 'update']);
            Route::DELETE('destroy', [HinhanhController::class, 'destroy']);
        });
        #Upload
        Route::post('upload/services', [UploadController::class, 'store']);
    
    }); 
});
Route::get('/', [App\Http\Controllers\MainController::class, 'index']);
Route::post('/services/load-product', [App\Http\Controllers\MainController::class, 'loadProduct']);
Route::get('danh-muc/{id}-{slug}.html', [App\Http\Controllers\MenuController::class,'index']);