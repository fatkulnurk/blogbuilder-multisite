<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    // make template
    $templateLib = \App\Model\TemplateLib::where('id', \App\Enum\TemplateDefault::ALL)->first();
    $template                   = new \App\Model\Template();
    $template->name             = $templateLib->name;
    $template->stylesheet       = $templateLib->stylesheet;
    $template->script_header    = $templateLib->script_header;
    $template->script_post_up   = $templateLib->script_post_up;
    $template->script_post_down = $templateLib->script_post_down;
    $template->script_nav_up    = $templateLib->script_nav_up;
    $template->script_nav_down  = $templateLib->script_nav_down;
    $template->script_footer    = $templateLib->script_footer;
    $template->code_header      = $templateLib->code_header;
    $template->code_footer      = $templateLib->code_footer;
    $template->code_index       = $templateLib->code_index;
    $template->code_search      = $templateLib->code_search;
    $template->code_page        = $templateLib->code_page;
    $template->code_post        = $templateLib->code_post;
    $template->code_about       = $templateLib->code_about;
    $template->code_404         = $templateLib->code_404;
    $template->template_lib_id  = $templateLib->id;

    return $template;
});
