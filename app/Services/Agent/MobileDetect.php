<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 4/13/2019
 * Time: 12:02 AM
 * Email: fatkulnurk@gmail.com
 */

namespace App\Services\Agent;


class MobileDetect
{
    private static function getInstance()
    {
        return new \Mobile_Detect();
    }

    public static function isMobile()
    {
        $instance = self::getInstance();

        if ($instance->isMobile()) {
            return true;
        }

        return false;
    }

    public static function isTablet()
    {
        $instance = self::getInstance();
        if ($instance->isTablet()) {
            return true;
        }

        return false;
    }

    public static function isDesktop()
    {
        if (!self::isMobile() && !self::isTablet()) {
            return true;
        }

        return false;
    }
}