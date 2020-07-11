<?php

use Illuminate\Database\Seeder;

class SettingGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SettingGeneral::create([
            'welcome_msg' => 'Welcome to Devs E-commerce',
            'cell' => '000999',
            'moto' => 'NOMOto',
            'copyright' => 'Dev.E-commerce',
        ]);
    }
}
