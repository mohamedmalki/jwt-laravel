<?php

use Illuminate\Database\Seeder;
use \App\Models\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();

        DB::table('users')->insert([
            'name' => "Mohamed MALKI",
            'email' => 'malki.mohamed.upm@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
