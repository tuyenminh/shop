<?php

namespace App\Http\Services\Dongho;

use App\Models\Chatlieuday;
use App\Models\Chatlieumatkinh;
use App\Models\Dochongnuoc;
use App\Models\Duongkinhmat;
use App\Models\Gioitinh;
use App\Models\Hinhdangmat;
use App\Models\Kieumat;
use App\Models\Loaidongho;
use App\Models\Loaimatso;
use App\Models\Loaimay;
use App\Models\Mauday;
use App\Models\Maumat;
use App\Models\Phongcach;
use App\Models\Thuonghieu;
use App\Models\Tienich;
use App\Models\Dongho;


use Illuminate\Support\Facades\Session;
use Illuminate\Log; 
use Illuminate\Http\Request;

class DonghoService {
    public function get() {
        // return Dongho::with('chatlieuday,chatlieumatkinh')->orderByDesc('id')->paginate(15);
    }
    public function getAll() {
        return Dongho::orderbyDesc('id')->paginate(20);
    }
    public function getChatlieuday() {
        return Chatlieuday::where(null)->get();
    }
    public function getChatlieumatkinh() {
        return Chatlieumatkinh::where(null)->get();
    }
    public function getDochongnuoc() {
        return Dochongnuoc::where(null)->get();
    }
    public function getDuongkinhmat() {
        return Duongkinhmat::where(null)->get();
    }
    public function getGioitinh() {
        return Gioitinh::where(null)->get();
    }
    public function getHinhdangmat() {
        return Hinhdangmat::where(null)->get();
    }
    public function getKieumat() {
        return Kieumat::where(null)->get();
    }
    public function getLoaidongho() {
        return Loaidongho::where(null)->get();
    }
    public function getLoaimatso() {
        return Loaimatso::where(null)->get();
    }
    public function getLoaimay() {
        return Loaimay::where(null)->get();
    }
    public function getMauday() {
        return Mauday::where(null)->get();
    }
    public function getMaumat() {
        return Maumat::where(null)->get();
    }
    public function getPhongcach() {
        return Phongcach::where(null)->get();
    }
    public function getThuonghieu() {
        return Thuonghieu::where(null)->get();
    }
    public function getTienich() {
        return Tienich::where(null)->get();
    }
    public function create($request)
    {
     try {
        Dongho::create ([
                'dh_ma'   => (string) $request->input('dh_ma'),
                'th_id' => (int) $request->input('th_id'),
                'gt_id' => (int) $request->input('gt_id'),
                'lms_id' => (int) $request->input('lms_id'),
                'lm_id' => (int) $request->input('lm_id'),
                'dkm_id' => (int) $request->input('dkm_id'),
                'km_id' => (int) $request->input('km_id'),
                'hdm_id' => (int) $request->input('hdm_id'),
                'clmk_id' => (int) $request->input('clmk_id'),
                'cld_id' => (int) $request->input('cld_id'),
                'mm_id' => (int) $request->input('mm_id'),
                'md_id' => (int) $request->input('md_id'),
                'ldh_id' => (int) $request->input('ldh_id'),
                'dcn_id' => (int) $request->input('dcn_id'),
                'pc_id' => (int) $request->input('pc_id'),
                'ti_id' => (int) $request->input('ti_id')
            ]);
            Session:: flash('success', 'Thêm đồng hồ thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm đồng hồ không thành công');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }
    public function update($request, $dongho) {
        try {
            $dongho->fill($request->input());
            $dongho->save();
            Session::flash('success', 'Cập nhật thành công');
        }catch (\Exception $err) {
            Session::flash('error', 'Cập nhật không thành công');
            \Log::info($err->getMessage());  
            return false;
        }
        return true;
    }
    public function delete($request) {
        $dongho = Dongho::where('id', $request->input('id'))->first();
        if ($dongho) {
            $dongho->delete();
            return true;
        }
        return false;
    }   

    
    
}