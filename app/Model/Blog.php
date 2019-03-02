<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $table    = 'blog';
    protected $fillable = [
        'subdomain',
        'domain_id',
        'title',
        'short_desc',
        'description',
        'user_id',
        'category_blog_id',
        'template_dekstop',
        'template_dekstop_status',
        'template_mobile',
        'template_mobile_status',
        'meta_header',
        'meta_footer',
        'logo'
    ];


    // Mutator
    public function setSubdomainAttribue($value)
    {
        $this->attributes['subdomain']  = Str::lower($value);
    }

    // Relationship
    public function domain()
    {
        return $this->belongsTo(Domain::class, 'domain_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function categoryBlog()
    {
        return $this->belongsTo(CategoryBlog::class, 'category_blog_id', 'id');
    }

    public function templateDekstop()
    {
        return $this->belongsTo(Template::class, 'template_dekstop', 'id');
    }

    public function templateMobile()
    {
        return $this->belongsTo(Template::class, 'template_mobile', 'id');
    }

    public function categoryPosts()
    {
        return $this->hasMany(Post::class, 'blog_id', 'id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'blog_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'blog_id', 'id');
    }

    //https://laraveldaily.com/pivot-tables-and-many-to-many-relationships/
    public function ownerBlog()
    {
        return $this->belongsToMany(User::class,'blog_owner', 'blog_id', 'user_id')
            ->withPivot('role')
            ->withTimestamps();
    }
}
