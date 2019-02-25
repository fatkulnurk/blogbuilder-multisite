<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table        = 'domain';

    protected $fillable     = ['domain'];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'domain_id', 'id');
    }
}
