<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('sections')->insert([
            [
                'id' => 1,
                'section_name' => 'Featured'
            ],
            [
                'id' => 2,
                'section_name' => 'On sale'
            ],
            [
                'id' => 3,
                'section_name' => 'Top rated'
            ],
            [
                'id' => 4,
                'section_name' => 'Main slider'
            ],
            [
                'id' => 5,
                'section_name' => 'Best sellers'
            ]
        ]);
    }
}
