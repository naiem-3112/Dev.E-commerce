<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name', 'slug', 'description', 'image', 'status', 'featured', 'position_id'
    ];

    public function SubCategories(){
        return $this->hasMany(SubCategory::class);
    }

    public function products(){
        // ->avg('rating')
        return $this->hasMany(Product::class); 
    }


}
