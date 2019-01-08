<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Смартфоны',
            'sort_order' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Компьютеры',
            'sort_order' => 2
        ]);

        DB::table('categories')->insert([
            'name' => 'Ноутбуки',
            'sort_order' => 3
        ]);

        DB::table('categories')->insert([
            'name' => 'Планшеты',
            'sort_order' => 4
        ]);

        DB::table('categories')->insert([
            'name' => 'Телевизоры',
            'sort_order' => 5
        ]);
    }
}
