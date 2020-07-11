<?php

use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Vendor::create([
            'name' => 'vendor1',
            'slug' => 'vendor1',
            'email' => 'vendor1@vendor1.com',
            'vendor_address' => 'Dhaka',
            'company_name' => 'company_1',
            'company_address' => 'Dhaka',
            'contact' => '000999',
        ]);

        App\Vendor::create([
            'name' => 'vendor2',
            'slug' => 'vendor2',
            'email' => 'vendor2@vendor2.com',
            'vendor_address' => 'Uttara',
            'company_name' => 'company_2',
            'company_address' => 'Uttara',
            'contact' => '000999',
        ]);

        App\Vendor::create([
            'name' => 'vendor3',
            'slug' => 'vendor3',
            'email' => 'vendor3@vendor3.com',
            'vendor_address' => 'Mirpur',
            'company_name' => 'company_3',
            'company_address' => 'Mirpur',
            'contact' => '000999',
        ]);

        App\Vendor::create([
            'name' => 'vendor4',
            'slug' => 'vendor4',
            'email' => 'vendor4@vendor4.com',
            'vendor_address' => 'Dhaka',
            'company_name' => 'company_4',
            'company_address' => 'Dhaka',
            'contact' => '000999',
        ]);

        App\Vendor::create([
            'name' => 'vendor5',
            'slug' => 'vendor5',
            'email' => 'vendor5@vendor5.com',
            'vendor_address' => 'Gazipur',
            'company_name' => 'company_5',
            'company_address' => 'Gazipur',
            'contact' => '000999',
        ]);

    }
}
