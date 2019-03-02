<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BlogOwner extends Model
{
    protected $table = 'blog_owner';

    protected $fillable = ['role'];
}
