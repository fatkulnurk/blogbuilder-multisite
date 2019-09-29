<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Blog::class, function (Faker $faker) {
    return [
        'subdomain'     => $faker->unique()->domainWord,
        'domain_id'     => 1,
        'title'         => $faker->title,
        'short_desc'    => $faker->text(190),
        'description'   => $faker->text(190),
        'user_id'       => \App\User::select('id')->inRandomOrder()->first(),
        'category_blog_id' => \App\Model\CategoryBlog::select('id')->inRandomOrder()->first(),
        'template_dekstop' => 1,
        'template_mobile' => 1,
        'template_dekstop_status'  => \App\Enum\StatusTemplateEnum::ON
    ];
});
