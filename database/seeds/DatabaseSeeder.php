<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(SubCategorySeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(BrandSeeder::class);
         $this->call(VendorSeeder::class);
         $this->call(SettingGeneralSeeder::class);
         $this->call(LanguageSeeder::class);
         $this->call(CurrencySeeder::class);
    }
}
