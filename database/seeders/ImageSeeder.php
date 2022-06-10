<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            [
                'image_name' => 'uploads/products_images/1.png',
                'product_id' => '1'
            ],
            [
                'image_name' => 'uploads/products_images/2.png',
                'product_id' => '2'
            ],
            [
                'image_name' => 'uploads/products_images/3.png',
                'product_id' => '3'
            ],
            [
                'image_name' => 'uploads/products_images/4.png',
                'product_id' => '4'
            ],
            [
                'image_name' => 'uploads/products_images/5.png',
                'product_id' => '5'
            ],
            [
                'image_name' => 'uploads/products_images/6.png',
                'product_id' => '6'
            ],
            [
                'image_name' => 'uploads/products_images/7.png',
                'product_id' => '7'
            ],
            [
                'image_name' => 'uploads/products_images/8.png',
                'product_id' => '8'
            ],
            [
                'image_name' => 'uploads/products_images/9.png',
                'product_id' => '9'
            ],
            [
                'image_name' => 'uploads/products_images/10.png',
                'product_id' => '10'
            ],
            [
                'image_name' => 'uploads/products_images/11.png',
                'product_id' => '11'
            ],
            [
                'image_name' => 'uploads/products_images/12.png',
                'product_id' => '12'
            ],
            [
                'image_name' => 'uploads/products_images/13.png',
                'product_id' => '13'
            ],
            [
                'image_name' => 'uploads/products_images/14.png',
                'product_id' => '14'
            ],
            [
                'image_name' => 'uploads/products_images/15.png',
                'product_id' => '15'
            ],
            [
                'image_name' => 'uploads/products_images/16.png',
                'product_id' => '16'
            ],
            [
                'image_name' => 'uploads/products_images/17.png',
                'product_id' => '17'
            ],
            [
                'image_name' => 'uploads/products_images/18.png',
                'product_id' => '18'
            ],
            [
                'image_name' => 'uploads/products_images/19.png',
                'product_id' => '19'
            ]
        ]);
    }
}
