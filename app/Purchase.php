<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'quantity', 'product_id', 'cost_price', 'sale_price', 'purchase_date', 'total', 'advance', 'total', 'balance'
    ];
}
