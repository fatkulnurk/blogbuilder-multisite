<?php

namespace App\Model;

use App\Enum\StatusComment;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComment extends Model
{
    use SoftDeletes;

    protected $table        = 'post_comment';
    protected $fillable     = [
        'body',
        'post_id',
        'user_id',
        'status'
    ];

    protected $appends  = [
        'date',
        'clock',
        'date_ago',
    ];

    // assessor
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

    // relationship
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
