<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'IGoregrind842@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Alexey',
            'email' => 'alex456.@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'NIkolay',
            'email' => 'nick33.@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
