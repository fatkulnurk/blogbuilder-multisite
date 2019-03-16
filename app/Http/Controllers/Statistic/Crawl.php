<?php

namespace App\Http\Controllers\Statistic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Crawl extends Controller
{
    public function index(Request $request)
    {
        return [
            'ip'                => $request->ip(),
            'ips'               => $request->ips(),
            'getCleintIp'       => $request->getClientIp(),
            'getCleintIps'      => $request->getClientIps(),
            'getUser'           => $request->getUser(),
            'getUserInfo'       => $request->getUserInfo(),
            'getBasePath'       => $request->getBasePath(),
            'getBaseUrl'        => $request->getBaseUrl(),
            'getUrl'            => $request->getUri(),
            'getRequestUri'     => $request->getRequestUri(),
            'getRequestFormat'  => $request->getRequestFormat(),
            'method'            => $request->method(),
            'getMethod'            => $request->getMethod(),
            'method'            => [
                'capture'            => $request->capture(),
                'instance'  => $request->instance(),
                'method'    => $request->method(),
                'root'  => $request->root(),
                'url'   => $request->url(),
                'fullUrl' => $request->fullUrl(),
                'path' => $request->path(),
            ],
            'server' => $request->server(),
        ];
    }
}
