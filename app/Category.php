<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'name', 'slug', 'description', 'image', 'status', 'featured', 'parent_id'
    ];

    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function childrens(){
        return $this->hasMany(Category::class, 'parent_id');
    }



}
