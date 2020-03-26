<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Image;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,300)->create()
        ->each(function(Post $post){
           $post->tags()->attach([
                rand(1,5),
                rand(6,14),
                rand(15,20),
           ]);
        })
        ->each(function(Post $post){
            $post->images()->attach([
                 rand(1,299),
                 rand(300,599),
                 rand(600,900),
            ]);
        });
    }
}

