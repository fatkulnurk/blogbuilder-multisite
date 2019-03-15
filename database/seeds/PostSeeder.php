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
        // Seeder
        factory(App\Model\Post::class, 1000)->create()->each(function ($post){
//            $post->categoryPost()->save(\App\Model\CategoryPost::findOrFail(1))->make();
//            $post->user()->save(\App\User::findOrFail(2))->make();
//            $post->blogs()->save(\App\Model\Blog::findOrFail(1)->make());
        });
    }
}
