<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable=[
        'name', 'code', 'symbol', 'conversion_rate', 'status'
    ];
}
