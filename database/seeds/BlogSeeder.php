<?php

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Model\Blog::class, 100)->create()->each(function ($blog){
           $blog->templateDekstop()->save(factory(App\Model\Template::class)->make());


//           $user->blogs()->save(factory(App\Model\Blog::class,2))->create()->each(function ($blogs){
//               $blogs->templateDekstop()->saveMany(factory(App\Model\Template::class)->make());
//           });


        });
    }
}
