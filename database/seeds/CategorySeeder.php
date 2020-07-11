<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' => 'Electronics',
            'slug' => 'electronics',
            'description' => 'electronics is a good category',
            'position_id' => 1,
        ]);

        App\Category::create([
            'name' => 'cloths',
            'slug' => 'cloths',
            'description' => 'cloths is a good category',
            'position_id' => 4,
        ]);

        App\Category::create([
            'name' => 'fruit',
            'slug' => 'fruit',
            'description' => 'fruit is a good category',
            'position_id' => 3,
        ]);

        App\Category::create([
            'name' => 'liquied',
            'slug' => 'liquied',
            'description' => 'liquied is a good category',
            'position_id' => 2,
        ]);

        App\Category::create([
            'name' => 'gas',
            'slug' => 'gas',
            'description' => 'gas is a good category',
            'position_id' => 5,
        ]);
    }
}
