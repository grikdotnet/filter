<?php

use GK\Filter\Filters\Integer;
use GK\Filter\Filters\Number;

class Factory
{
    /**
     * @return Number
     */
    public static function numeric($field_name)
    {
        $rule = new Number($field_name);
        return $rule;
    }

    /**
     * @param $field_name
     * @return Integer
     */
    public static function int($field_name)
    {
        return new Integer($field_name);
    }

}