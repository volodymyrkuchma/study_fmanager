<?php

/**
 * Created by PhpStorm.
 */
class Folder extends Entity
{
    /**
     * Folder constructor.
     * @param $location
     */
    public function __construct($location){

        parent::__construct($location);
        $this->name = basename($location);
    }

    /**
     * Display short file info
     */
    public function showTeaser(){
        echo '<div><a href="#"><i class="uk-icon-folder"></i> '.$this->name.'</a></div>';
    }

    /**
     * Display file content
     */
    public function showContent(){}
}