<?php

/**
 * Created by PhpStorm.
 */
class Folder extends Entity
{
    /**
     * Display short file info
     */
    public function showTeaser(){
        echo '<div><a href="#">'.$this->name.'</a></div>';
    }

    /**
     * Display file content
     */
    public function showContent(){}
}