<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hinhanh extends Model
{
    use HasFactory;
    protected $fillable = [
        'dh_ma',
        'thumb'
    ];
    public function dongho(){
        return $this->hasOne(Dongho::class, 'id', 'dh_ma')
        ->withDefault(['dh_ma' => '']);
    
    }
    // public function products(){
    //     return $this->hasMany(Dongho::class, 'dh_ma', 'id');
    // }
}
