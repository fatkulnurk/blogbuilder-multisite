<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/26/2019
 * Time: 5:48 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Scopes;

use App\Enum\StatusComment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PostCommentStatusScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('status','!=', StatusComment::PENDING);
        $builder->where('status','!=', StatusComment::SPAM);
        $builder->where('status','!=', StatusComment::TRASH);
    }
}