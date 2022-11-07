<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dongho extends Model
{
    use HasFactory;
    protected $fillable = [
        'dh_ma',
        'th_id',
        'gt_id',
        'lms_id',
        'lm_id',
        'dkm_id',
        'km_id',
        'hdm_id',
        'clmk_id',
        'cld_id',
        'mm_id',
        'md_id',
        'ldh_id',
        'dcn_id',
        'pc_id',
        'ti_id'   
    ];
    public function thuonghieu(){
        return $this->hasOne(Thuonghieu::class, 'id', 'th_id')
        ->withDefault(['ten' => '']);
    
    }
    public function gioitinh(){
        return $this->hasOne(Gioitinh::class, 'id', 'gt_id')
        ->withDefault(['ten' => '']);

    }
    public function loaimatso(){
        return $this->hasOne(Loaimatso::class, 'id', 'lms_id')
        ->withDefault(['ten' => '']);
    
    }
    public function loaimay(){
        return $this->hasOne(Loaimay::class, 'id', 'lm_id')
        ->withDefault(['ten' => '']);
    
    }
    public function duongkinhmat(){
        return $this->hasOne(Duongkinhmat::class, 'id', 'dkm_id')
        ->withDefault(['ten' => '']);
    
    }
    public function kieumat(){
        return $this->hasOne(Kieumat::class, 'id', 'km_id')
        ->withDefault(['ten' => '']);
    
    }
    public function hinhdangmat(){
        return $this->hasOne(Hinhdangmat::class, 'id', 'hdm_id')
        ->withDefault(['ten' => '']);
    
    }
    public function chatlieumatkinh(){
        return $this->hasOne(Chatlieumatkinh::class, 'id', 'clmk_id')
        ->withDefault(['ten' => '']);

    }
        
    public function chatlieuday(){
        return $this->hasOne(Chatlieuday::class, 'id', 'cld_id')
        ->withDefault(['ten' => '']);
        
    }
    public function maumat(){
        return $this->hasOne(Maumat::class, 'id', 'mm_id')
        ->withDefault(['ten' => '']);
    
    }
    public function mauday(){
        return $this->hasOne(Mauday::class, 'id', 'md_id')
        ->withDefault(['ten' => '']);
    
    }
    public function loaidongho(){
        return $this->hasOne(Loaidongho::class, 'id', 'ldh_id')
        ->withDefault(['ten' => '']);
    
    }
    public function dochongnuoc(){
        return $this->hasOne(Dochongnuoc::class, 'id', 'dcn_id')
        ->withDefault(['ten' => '']);
        
    }
    public function phongcach(){
        return $this->hasOne(Phongcach::class, 'id', 'pc_id')
        ->withDefault(['ten' => '']);
        
    }
        
    public function tienich(){
        return $this->hasOne(Tienich::class, 'id', 'ti_id')
        ->withDefault(['ten' => '']);
        
    }           
}
