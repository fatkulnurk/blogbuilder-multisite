<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CategoryBlog extends Model
{
    use HasSlug;
    protected $table    = 'category_blog';

    protected $fillable = [
        'name',
        'description',
        'slug'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_blog_id', 'id');
    }
}
