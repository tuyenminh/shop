<?php

 namespace App\Http\Services\Product;

use App\Models\Product;

 class ProductService2 {
    const LIMIT = 4;
    public function get($page = null) {
        return Product::select('id', 'name', 'price', 'price_sale', 'thumb')
        ->orderByDesc('id')
        ->when($page != null, function($query) use ($page){
            $query->offset($page * self::LIMIT);
        })
        ->limit(self::LIMIT)
        ->get();
    }
 }