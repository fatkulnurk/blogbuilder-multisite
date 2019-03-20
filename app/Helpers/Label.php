<?php
/**
 * Created by PhpStorm.
 * User: Rudi
 * Date: 3/19/2019
 * Time: 3:47 PM
 * Email: fatkulnurk@gmail.com
 */

if (! function_exists('label_to_array_map')) {
    function label_to_array($value) {
        $label = explode(',', $value);
        $labelArr = array();

        foreach ($label as $item) {
            $labelArr[] = [
                'item' => $item
            ];
        }

        return $labelArr;
    }
}