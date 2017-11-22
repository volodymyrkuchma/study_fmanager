<?php

namespace Mindk\Files;

use Mindk\Helper;

/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 15.11.17
 * Time: 19:14
 */
class ImageFile extends File
{
    public function showTeaser()
    {
        echo '<div class="tm-teaser"><div class="tm-thumb" style="background-image: url('.Helper::getRelativePath(ROOT , $this->path).')"></div>'.$this->name.' <span class="uk-badge uk-badge-notification uk-margin-left">Image Type: '.strtoupper($this->type).'</span></div>';
    }
}