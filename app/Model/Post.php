<?php

namespace App\Model;

use App\User;
use Carbon\Carbon;
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

    protected $appends      = [
        'date',
        'date_ago'
    ];

    // scope
    public function scopeSearch($query, $key)
    {
        $query->where('title','like', '%'.$key.'%')
            ->orWhere('label', 'like', '%'.$key.'%')
            ->orWhere('body','like', '%'.$key.'%');
    }

    // accessor
    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('M d, Y');
    }

    public function getDateAgoAttribute()
    {
        return Carbon::now()->diffInDays($this->attributes['created_at']);
    }

    // relation
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

    public function updateUser()
    {
        return $this->belongsTo(User::class, 'update_user_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_id', 'id');
    }
}
