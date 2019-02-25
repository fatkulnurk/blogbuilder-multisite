<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TemplateLib extends Model
{
    protected $table        = 'template_lib';
    protected $fillable     = [
        'name',
        'stylesheet',
        'script_header',
        'script_post_up',
        'script_post_down',
        'script_nav_up',
        'script_nav_down',
        'script_footer',
        'code_header',
        'code_footer',
        'code_index',
        'code_search',
        'code_page',
        'code_post',
        'code_about',
        'code_404'
    ];

    public function template()
    {
        return $this->hasMany(Template::class, 'template_lib_id', 'id');
    }
}
