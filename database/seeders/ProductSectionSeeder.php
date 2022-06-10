<?php

namespace Database\Seeders;

use App\Models\Admin\Product;
use App\Models\Admin\Section;
use Illuminate\Database\Seeder;

class ProductSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = Product::all();

        Section::all()->each(function($section) use ($products) {
            $section->products()->attach($products->random(rand(3,5))->pluck('id')->toArray());
            }
        );
    }
}
