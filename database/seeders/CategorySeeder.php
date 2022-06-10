<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'id'            => 1,
            'category_name' => 'TV & Audio',
            'thumbnail'     => 'uploads/category/tv&audio.png',
            ],
            [
            'id'            => 2,
            'category_name' => 'Laptops & Computers',
            'thumbnail'     => 'uploads/category/laptops&computers.png',
            ],
            [
            'id'            => 3,
            'category_name' => 'Gaming & Consoles',
            'thumbnail'     => 'uploads/category/gaming&consoles.png',
            ],
            [
            'id'            => 4,
            'category_name' => 'Phones & Tablets',
            'thumbnail'     => 'uploads/category/phones&tablets.png',
            ]
    ]);
    }
}
