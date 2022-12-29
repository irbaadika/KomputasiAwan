<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'phone' => '082232313626',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'verify' => '1'
        ]);

        User::create([
            'name' => 'Seller',
            'username' => 'Seller',
            'phone' => '082232313629',
            'email' => 'seller@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'buyer',
            'verify' => '1'
        ]);
    }
}
