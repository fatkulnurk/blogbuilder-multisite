<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table        = 'post';

    protected $fillable     = [
        'title',
        'body',
        'thumbnail',
        'slug',
        'label',
        'category_post_id',
        'blog_id',
        'user_id'
    ];

    public function categoryPost()
    {
        return $this->belongsTo(CategoryPost::class, 'category_post_id');
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_id', 'id');
    }
}
