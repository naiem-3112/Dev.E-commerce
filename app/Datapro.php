<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapro extends Model
{
    protected $fillable = [
        'pro_brand_id', 'proName', 'proTag', 'price'
    ];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
