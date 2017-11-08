<?php

/**
 * Created by PhpStorm.
 *
 * File
 */
class File extends Entity
{
    public $type;

    public function __construct($location)
    {
        parent::__construct($location);

        $data = pathinfo($this->path);
        $this->type = $data['extension'];
    }

    /**
     * Display short file info
     */
    public function showTeaser()
    {
        echo '<div><b>' . $this->name . '</b></div>';
    }

    /**
     * Display file content
     */
    public function showContent()
    {
        // TODO: Implement showContent() method.
    }
}