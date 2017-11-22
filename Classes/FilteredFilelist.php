<?php

namespace Mindk;

/**
 * Created by PhpStorm.
 * User: dimmask
 * Date: 12.11.17
 * Time: 17:00
 */
class FilteredFilelist extends \FilterIterator
{

    public function __construct(array $items)
    {
        parent::__construct( new \ArrayIterator($items) );
    }

    /**
     * Check
     */
    public function accept()
    {
        $current = $this->getInnerIterator()->current();

        return !preg_match('/^\./', $current->name);
    }
}