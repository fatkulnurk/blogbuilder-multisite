<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Post::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence,
        'body'      => '<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>'.'<p>'.$faker->paragraph.'</p>',
        'slug'      => \Illuminate\Support\Str::slug($faker->sentence),
        'thumbnail' => '',
//        'label'     => $faker->randomElements(array('saya','cinta', 'mereka', 'php', 'developer', 'politik','indonesia', 'merdeka', 'tahun', '1945', 'kita', 'satu', 'gopay' , 'fintech'), 5, false),
        'label'     => 'saya,cinta,mereka,php,developer',
        'status'    => \App\Enum\StatusPostEnum::PUBLISH,
        'blog_id'   => 1,
        'category_post_id' => 1,
        'user_id' => 2,
    ];
});
