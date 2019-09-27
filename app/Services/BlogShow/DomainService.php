<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 4/12/2019
 * Time: 11:42 PM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\BlogShow;


use App\Model\Blog;
use Illuminate\Http\Request;

class DomainService
{
    /*
     * For checking blog available or not
     * */
    public static function getBlog($request, $username)
    {
        $blog = Blog::with([
            'templateDekstop',
            'templateMobile',
            'categoryPosts',
        ])
            ->where('subdomain', $username)
            ->first();

        return $blog;
    }

    public static function blog(Request $request, $username)
    {
        return Blog::where('subdomain', $username)->first();
    }

    public function info(array $data)
    {
        return Blog::where('subdomain', $data['username'])->first();
    }
}