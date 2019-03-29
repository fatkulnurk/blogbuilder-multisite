<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/23/2019
 * Time: 11:02 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Scopes;

use App\Enum\StatusPageEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class PageStatusScope implements Scope
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
        $builder->where('status','!=', StatusPageEnum::DELETE);
        $builder->where('status','!=', StatusPageEnum::TRASH);
        $builder->where('status','!=', StatusPageEnum::DRAFT);
    }
}