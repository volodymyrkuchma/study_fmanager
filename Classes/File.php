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
        $this->name = !empty($data['filename']) ? $data['filename'] : $data['basename'];
        $this->type = strtolower($data['extension']);
    }

    /**
     * Display short file info
     */
    public function showTeaser()
    {
        echo '<div><i class="uk-icon-file"></i> ' . $this->name . '<span class="uk-text-muted uk-float-right">['.$this->formatSize($this->size).']</span></div>';
    }

    /**
     * Display file content
     */
    public function showContent()
    {
        // TODO: Implement showContent() method.
    }

    /**
     * Returns formatted filesize
     */
    public function formatSize($size): string{
        $units = ['b', 'Kb', 'Mb', 'Gb'];
        $sizeGroup = ceil(strlen((string)$size) / 3) - 1;
        $value = round($size / pow(10, $sizeGroup * 3), 1);

        return $value . ' ' . $units[$sizeGroup];
    }
}