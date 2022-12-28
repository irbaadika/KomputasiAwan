<?php

namespace Database\Seeders;

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
        $category = [
            ['name' => 'Laptop',],
            ['name' => 'Laptop Gaming',],
            ['name' => 'Charger',],
            ['name' => 'Keyboard',],
            ['name' => 'Mouse',]
        ];

        DB::table('categories')->insert($category);
    }
}
