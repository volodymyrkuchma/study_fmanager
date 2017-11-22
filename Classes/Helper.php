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
     *
     * @param   raw size in bytes
     *
     * @return  string Formatted size
     */
    public static function formatSize($size): string{

        $sizeGroup = ceil(strlen((string)$size) / 3) - 1;
        $value = round($size / pow(10, $sizeGroup * 3), 1);

        return $value . ' ' . self::$units[$sizeGroup];
    }

    /**
     * Returns relative path to target, depending on base
     *
     * @param $basePath
     * @param $targetPath
     *
     * @return string
     */
    public static function getRelativePath($basePath, $targetPath): string {
        $base = preg_replace('/^\//', '', $basePath);
        $rel = '/' . str_replace($base, '', $targetPath);
        $rel = preg_replace('/^[\/]*/', '/', $rel);

        return $rel;
    }
}