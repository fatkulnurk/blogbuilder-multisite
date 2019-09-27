<?php

namespace App\Model;

use App\Scopes\PageStatusScope;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Page extends Model
{
    use SoftDeletes;

    protected $table        = 'page';

    protected $fillable     = [
        'title',
        'slug',
        'blog_id',
        'user_id',
        'body',
        'status'
    ];

    protected $appends      = [
        'body_short',
        'date',
        'clock',
        'date_ago'
    ];


    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new PageStatusScope());
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

    public function getBodyShortAttribute()
    {
        $htmlClear = strip_tags($this->attributes['body']);
        return Str::limit($htmlClear, 150);
    }

    // relationship
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
