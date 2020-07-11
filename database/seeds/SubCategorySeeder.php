<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SubCategory::create([
            'category_id' => 1,
            'name' => 'blander',
            'slug' => 'blander',
            'description' => 'blander is a good category',
            'position_id' => 7,
        ]);

        App\SubCategory::create([
            'category_id' => 2,
            'name' => 'apple',
            'slug' => 'apple',
            'description' => 'apple is a good category',
            'position_id' => 6,
        ]);

        App\SubCategory::create([
            'category_id' => 3,
            'name' => 'shirt',
            'slug' => 'shirt',
            'description' => 'shirt is a good category',
            'position_id' => 3,
        ]);

        App\SubCategory::create([
            'category_id' => 4,
            'name' => 'pen',
            'slug' => 'pen',
            'description' => 'pen is a good category',
            'position_id' => 2,
        ]);

        App\SubCategory::create([
            'category_id' => 5,
            'name' => 'pencil',
            'slug' => 'pencil',
            'description' => 'pencil is a good category',
            'position_id' => 4,
        ]);
    }
}
