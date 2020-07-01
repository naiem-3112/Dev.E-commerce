<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name', 'slug', 'email', 'vendor_address', 'company_name', 'company_address', 'contact', 'status'
    ];
}
