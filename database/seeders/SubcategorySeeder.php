<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            [
                'id'    => 1,
                'subcategory_name' => 'Televisions',
                'thumbnail' => 'uploads/subcategory/televisions.png',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'subcategory_name' => 'Television Accesories',
                'thumbnail' => 'uploads/subcategory/tv_accessories.png',
                'category_id' => 1
            ],
            [
                'id' => 3,
                'subcategory_name' => 'Audio',
                'thumbnail' => 'uploads/subcategory/audio.png',
                'category_id' => 1
            ],
            //////////////////////////////////////////////////////////
            [
                'id' => 4,
                'subcategory_name' => 'Laptops',
                'thumbnail' => 'uploads/subcategory/laptops.png',
                'category_id' => 2
            ],
            [
                'id' => 5,
                'subcategory_name' => 'PC',
                'thumbnail' => 'uploads/subcategory/pc.png',
                'category_id' => 2
            ],
            [
                'id' => 6,
                'subcategory_name' => 'PC Accessories',
                'thumbnail' => 'uploads/subcategory/pc_accessories.png',
                'category_id' => 2
            ],
            ///////////////////////////////////////////////////////////
            [
                'id' => 7,
                'subcategory_name' => 'Gaming consoles',
                'thumbnail' => 'uploads/subcategory/gaming_consoles.png',
                'category_id' => 3
            ],
            [
                'id' => 8,
                'subcategory_name' => 'Games',
                'thumbnail' => 'uploads/subcategory/games.png',
                'category_id' => 3
            ],
            ///////////////////////////////////////////////////////////////////
            [
                'id' => 9,
                'subcategory_name' => 'Phones',
                'thumbnail' => 'uploads/subcategory/phones.png',
                'category_id' => 4
            ],
            [
                'id' => 10,
                'subcategory_name' => 'Phone Accessories',
                'thumbnail' => 'uploads/subcategory/phone_accessories.png',
                'category_id' => 4
            ]

            ]);
    }
}
