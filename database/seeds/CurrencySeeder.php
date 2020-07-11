<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Currency::create([
            'name' => 'Dollars',
            'code' => 'USD',
            'symbol' => '$',
            'conversion_rate' => 1,
        ]);
    }
}
