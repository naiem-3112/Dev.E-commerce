<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'image', 'status', 'featured', 'position_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
