<?php

use Illuminate\Database\Seeder;

class TemplateLibTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\TemplateLib::create([
            'name'              => 'FNK Test',
            'stylesheet'        => 'body {background:white};',
            'script_header'     => '',
            'script_post_up'    => '',
            'script_post_down'  => '',
            'script_nav_up'     => '',
            'script_nav_down'   => '',
            'script_footer'     => '',
            'code_header'       => '<!DOCTYPE> <html><head><title>tes</title></head><body>',
            'code_footer'       => '<hr><p>saya di footer</p></body></html>',
            'code_index'        => '<h1>Index</h1>',
            'code_search'       => '<h1>saya di search</h1>',
            'code_page'         => '<h1>saya di page</h1>',
            'code_post'         => '<h1>saya di post</h1>',
            'code_about'        => '<h1>saya di about</h1>',
            'code_404'          => '<h1>saya di 404</h1>',
        ]);
    }
}
