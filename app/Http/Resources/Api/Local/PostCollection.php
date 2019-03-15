<?php

namespace App\Http\Resources\Api\Local;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Str;

//class PostCollection extends ResourceCollection
class PostCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'data' => $this->collection
//
//            'id'    => $this->id,
//            'title' => $this->title,
//            'body'  => Str::substr($this->body, 1, 200)
        ];
    }
}
