<?php

 namespace App\Http\Services\Dongho;

use App\Models\Dongho;
use App\Models\Hinhanh;

 class DonghoService2 {
    const LIMIT = 8;
    public function get($page = null) {
        return Hinhanh::select('id', 'dh_ma', 'thumb')
        ->orderByDesc('id')
        ->when($page != null, function ($query) use ($page){
            $query->offset($page * self::LIMIT);
        })
        ->limit(self::LIMIT)
        ->get();
    }
    public function show($id) {
        return Hinhanh::where('id', $id)->firtOrFail();
    }
 }