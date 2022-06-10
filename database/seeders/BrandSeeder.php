<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'id' => 1,
                'brand_name' => 'Samsung',
                'brand_logo' => 'uploads/brands/samsung.png',
            ],
            [
                'id' => 2,
                'brand_name' => 'Huawei',
                'brand_logo' => 'uploads/brands/huawei.png',
            ],
            [
                'id' => 3,
                'brand_name' => 'Apple',
                'brand_logo' => 'uploads/brands/apple.png',
            ],
            [
                'id' => 4,
                'brand_name' => 'Xiaomi',
                'brand_logo' => 'uploads/brands/xiaomi.png',
            ],
            [
                'id' => 5,
                'brand_name' => 'Sony',
                'brand_logo' => 'uploads/brands/sony.png',
            ],
            [
                'id' => 6,
                'brand_name' => 'Microsoft',
                'brand_logo' => 'uploads/brands/microsoft.png',
            ],
            [
                'id' => 7,
                'brand_name' => 'Dell',
                'brand_logo' => 'uploads/brands/dell.png',
            ],
            [
                'id' => 8,
                'brand_name' => 'Acer',
                'brand_logo' => 'uploads/brands/acer.png',
            ],
            [
                'id' => 9,
                'brand_name' => 'Lenovo',
                'brand_logo' => 'uploads/brands/lenovo.png',
            ],
            [
                'id' => 10,
                'brand_name' => 'LG',
                'brand_logo' => 'uploads/brands/lg.png',
            ],
        ]);
    }
}
