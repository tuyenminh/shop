<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maumat extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten'
    ];
    // public function products(){
    //     return $this->hasMany(Product::class, 'menu_id', 'id');
    // }
}
