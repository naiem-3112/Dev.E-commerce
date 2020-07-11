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
            'code' => 'BN',
            'name' => 'Bangla',
            'native' => 'Bangla',
            'rtl' => '0',
        ]);
        
        App\Language::create([
            'code' => 'EN',
            'name' => 'English',
            'native' => 'English',
            'rtl' => '0',
        ]);
    }
}
