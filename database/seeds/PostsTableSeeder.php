<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 200)
        ->create()
        ->each(function (App\Post $post) {
        	$post->tags()->attach([
        		rand(1,5),
        		rand(6,9),
        		rand(9,20)		
        	]);
        });
    }
}
