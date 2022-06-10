<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'Electro – Electronics Ecommerce Theme',
            'logo' => 'uploads/settings/logo.png',
            'email' => 'sales@electro.com',
            'phone'  => '(800) 8001-8588',
            'address' => '17 Princess Road, London, Greater London NW1 8JR, UK',
            'discription' => 'Welcome to Worldwide Electronics Store'
        ]);
    }
}
