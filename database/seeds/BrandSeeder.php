<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Brand::create([
            'name' => 'HP',
            'slug' => 'HP',
            'description' => 'HP is a good brand',
        ]);

        App\Brand::create([
            'name' => 'Samsung',
            'slug' => 'Samsung',
            'description' => 'Samsung is a good brand',
        ]);

        App\Brand::create([
            'name' => 'Dell',
            'slug' => 'Dell',
            'description' => 'Dell is a good brand',
        ]);

        App\Brand::create([
            'name' => 'Apple',
            'slug' => 'Apple',
            'description' => 'Apple is a good brand',
        ]);

        App\Brand::create([
            'name' => 'LG',
            'slug' => 'LG',
            'description' => 'LG is a good brand',
        ]);
    }
}
