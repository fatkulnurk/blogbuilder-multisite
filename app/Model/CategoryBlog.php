<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    protected $table    = 'category_blog';

    protected $fillable = [
        'name',
        'description'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_blog_id', 'id');
    }
}
