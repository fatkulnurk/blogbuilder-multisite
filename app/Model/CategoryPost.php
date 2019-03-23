<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryPost extends Model
{
    use SoftDeletes;

    protected $table        = 'category_post';
    protected $fillable     = [
        'name',
        'slug',
        'description',
        'blog_id'
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_post_id', 'id');
    }
}
