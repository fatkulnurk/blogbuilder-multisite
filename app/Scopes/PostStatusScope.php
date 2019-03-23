<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/21/2019
 * Time: 10:48 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Scopes;

use App\Enum\StatusPostEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PostStatusScope implements Scope
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
        $builder->where('status','!=', StatusPostEnum::DELETE);
        $builder->where('status','!=', StatusPostEnum::DRAFT);
        $builder->where('status','!=', StatusPostEnum::TRASH);
    }
}