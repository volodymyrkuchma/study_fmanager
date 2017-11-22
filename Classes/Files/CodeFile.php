<?php
/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 22.11.17
 * Time: 14:08
 */

namespace Mindk\Files;

use Mindk\Helper;

/**
 * Class CodeFile
 * @package Mindk\Files
 */
class CodeFile extends File
{
    /**
     * Display file teaser
     */
    public function showTeaser()
    {
        echo '<div class="tm-teaser"><i class="uk-icon-file-code-o"></i> ' . $this->name . '<span class="uk-text-muted uk-float-right">['.Helper::formatSize($this->size).']</span></div>';
    }
}