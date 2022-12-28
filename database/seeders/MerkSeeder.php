<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merk = [
            ['name' => 'Asus',],
            ['name' => 'MSI',],
            ['name' => 'Acer',],
            ['name' => 'Lenovo',]
        ];

        DB::table('merks')->insert($merk);
    }
}
