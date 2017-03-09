<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carbon = Carbon::now();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Sebastián Silva',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
            'email' => 'sebasilvac88@gmail.com',
            'created_at' => $carbon::now(),
            'updated_at' => $carbon::now()
        ]);

        factory('App\User', 4)->create();

    }
}
