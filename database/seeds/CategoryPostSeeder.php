<?php

use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeder
        factory(App\Model\CategoryPost::class, 100)->create()->each(function ($categoryPost){
            $user->userDetail()->save(factory(App\Model\UserDetail::class)->make());
            $user->blogs()->save(factory(App\Model\Blog::class)->make());
        });
    }
}
