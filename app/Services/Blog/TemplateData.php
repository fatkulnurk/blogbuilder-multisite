<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/20/2019
 * Time: 10:26 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Blog;

use App\Model\Blog;
use Illuminate\Http\Request;

class TemplateData
{
    public static function global(Request $request)
    {
        return [
            'url' => self::url($request),
            'csrf' => self::csrf()
        ];
    }

    // Get Information Url
    public static function url($request)
    {
        return [
            'url_root' => $request->root(),
            'url' => $request->url(),
            'url_path' => $request->path()
        ];
    }

    // pagination for post
    public static function pagination($model)
    {
        return [
            'current_page' => $model->currentPage(),
            'first_page_url' => $model->url(1),
            'from' => $model->firstItem(),
            'last_page' => $model->lastPage(),
            'last_page_url' => $model->url($model->lastPage()),
            'next_page_url' => $model->nextPageUrl(),
            'per_page' => $model->perPage(),
            'prev_page_url' => $model->previousPageUrl(),
            'to' => $model->lastItem(),
            'total' => $model->total(),
        ];
    }

    // csrf token
    public static function csrf()
    {
        return [
            'csrf_field' => csrf_field(),
            'csrf_token' => csrf_token()
        ];
    }
}