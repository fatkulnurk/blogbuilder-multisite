<?php

namespace App\Model;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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
        'body_short',
        'date',
        'clock',
        'date_ago',
        'labels'
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

    public function getClockAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('H:i');
    }

    public function getDateAgoAttribute()
    {
        return Carbon::now()->diffInDays($this->attributes['created_at']);
    }

    public function getLabelsAttribute()
    {
        return label_to_array($this->attributes['label']);
    }

    public function getBodyShortAttribute()
    {
        $htmlClear = strip_tags($this->attributes['body']);
        return Str::limit($htmlClear, 150);
    }

//    public function getLabelAttribute()
//    {
//        $label = array();
//
//        foreach (json_decode($this->attributes['label']) as $item) {
//            $label[] = [
//                'item' => $item
//            ];
//        }
//
//        return $label;
//        return json_decode($this->attributes['label']);
//    }

    // muttator
//    public function setLabelAttribute($value)
//    {
//        $label = explode(',', $value);
//        $this->attributes['label'] = json_encode($label);
//    }

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
