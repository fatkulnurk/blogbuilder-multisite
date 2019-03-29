<?php

namespace App\Model;

use App\Scopes\PageStatusScope;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
