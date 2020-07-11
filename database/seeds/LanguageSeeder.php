<?php

use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Language::create([
            'name' => 'Bangla',
            'code' => 'BN',
        ]);
        
        App\Language::create([
            'name' => 'English',
            'code' => 'EN',
        ]);
    }
}
