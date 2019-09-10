<?php

use Illuminate\Database\Seeder;
use \App\Models\Post;
use \App\Models\User;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::truncate();

        for ($i=0; $i < 10 ; $i++) { 
            
    	   $user = User::find(1);
           $faker = \Faker\Factory::create();
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'user_id' => $user->id,
                'description' => $faker->paragraph
            ]);
        }
    }
}
