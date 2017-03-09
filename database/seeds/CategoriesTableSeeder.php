<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(['name' => 'Important']);
        DB::table('categories')->insert(['name' => 'Random']);
        DB::table('categories')->insert(['name' => 'Recursos']);
    }
}
