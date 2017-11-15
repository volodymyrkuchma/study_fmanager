<?php

/**
 * Created by PhpStorm.
 */
class Folder extends Entity
{
    /**
     * @var array   Folder content
     */
    protected $children;

    /**
     * @var array   Reflection options
     */
    protected $config = [];

    /**
     * Folder constructor.
     * @param $location
     */
    public function __construct($location, $config = []){

        parent::__construct($location);

        $this->name = basename($location);
        $this->config = $config;
    }

    /**
     * Load folder content
     */
    protected function loadContent(){
        $list = scandir($this->path);
        $buffer = [];

        if(!empty($list)){
            foreach($list as $item){
                $fullPath = $this->path . DS . $item;
                $obj = is_file($fullPath)
                    ? new File($fullPath)
                    : new Folder($fullPath);

                $buffer[] = $obj;
            }

            $this->children = new FilteredFilelist($buffer);
        }

    }

    /**
     * Display short file info
     */
    public function showTeaser(){
        echo '<div><a href="index.php?entry='.urlencode($this->path).'"><i class="uk-icon-folder"></i> '.$this->name.'</a></div>';
    }

    /**
     * Display file content
     */
    public function showContent(){
        $this->loadContent();

        // Levelup link
        if(!empty($this->config['levelup_link'])){
            echo '<a href="index.php?entry='.urlencode(dirname($this->path)).'"><i class="uk-icon-mail-reply-all"></i> ..</a>';
        }

        foreach($this->children as $childNode){
            if($childNode instanceof Entity){
                $childNode->showTeaser();
            }
        }
    }
}