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

    protected $appends  = [
        'domain',
        'full_domain'
    ];

    // Local Scope
    public function scopeSearch($query, $key)
    {
        $query->where('subdomain','like', '%'.$key.'%')
            ->orWhere('title','like', '%'.$key.'%')
            ->orWhere('short_desc','like', '%'.$key.'%')
            ->orWhere('description','like', '%'.$key.'%');
    }

    // accesor
    public function getDomainAttribute()
    {
        $this->attributes['domain'] = $this->domain->domain;
    }

    public function getFullDomainAttribute()
    {
        return $this->subdomain.'.'.$this->domain;
    }

    // Mutator
    public function setSubdomainAttribute($value)
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
        return $this->hasMany(CategoryPost::class, 'blog_id', 'id');
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
