<?php

namespace Mindk;

/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 12.11.17
 * Time: 16:12
 */
class Helper
{
    public static $units = ['b', 'Kb', 'Mb', 'Gb'];
    /**
     * Returns formatted filesize
     */
    public static function formatSize($size): string{

        $sizeGroup = ceil(strlen((string)$size) / 3) - 1;
        $value = round($size / pow(10, $sizeGroup * 3), 1);

        return $value . ' ' . self::$units[$sizeGroup];
    }
}