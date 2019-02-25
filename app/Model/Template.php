<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table        = 'template';

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
        'code_404',
        'template_lib_id'
    ];

    public function templateLib()
    {
        return $this->belongsTo(TemplateLib::class, 'template_lib_id', 'id');
    }

    public function blogDekstops()
    {
        return $this->hasMany(Blog::class, 'template_dekstop', 'id');
    }

    public function blogMobiles()
    {
        return $this->hasMany(Blog::class, 'template_mobile', 'id');
    }
}
