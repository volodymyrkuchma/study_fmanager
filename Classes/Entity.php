<?php

namespace Mindk;

/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 08.11.17
 * Time: 19:45
 */
abstract class Entity
{
    public $name;

    public $size;

    public $path;

    public function __construct($location)
    {
        $this->path = $location;
        $this->size = filesize($this->path);
    }

    /**
     * Display short file info
     */
    abstract public function showTeaser();

    /**
     * Display file content
     */
    abstract public function showContent();
}