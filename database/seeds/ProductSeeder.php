<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        App\Product::create([
            'category_id' => 1,
            'name' => 'mobile',
            'slug' => 'mobile',
            'description' => 'mobile is a good product',
            'price' => 4566
        ]);

        App\Product::create([
            'category_id' => 3,
            'name' => 'laptop',
            'slug' => 'laptop',
            'description' => 'laptop is a good product',
            'price' => 6897
        ]);

        App\Product::create([
            'category_id' => 5,
            'name' => 'radio',
            'slug' => 'radio',
            'description' => 'radio is a good product',
            'price' => 98785
        ]);

        App\Product::create([
            'category_id' => 2,
            'name' => 'shirt',
            'slug' => 'shirt',
            'description' => 'shirt is a good product',
            'price' => 690
        ]);

        App\Product::create([
            'category_id' => 6,
            'name' => 'chocolate',
            'slug' => 'chocolate',
            'description' => 'chocolate is a good product',
            'price' => 450
        ]);
    }
}
