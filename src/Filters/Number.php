<?php

namespace GK\Filter\Filters;

/**
 * Validates a value as a number - int or float in decimal, hex,
 * octal or scientific representation
 *
 * @package GK\Filter\Filters
 */
class Number extends BaseRule
{
    /**
     * A default numeric filter
     * @var int
     */
    protected $filter = FILTER_VALIDATE_FLOAT;

    /**
     * Add validation to ensure the value is numeric and greater then zero
     */
    public function positive()
    {
        $this->filter = FILTER_CALLBACK;
        $this->options = function($value) {
            return ( is_numeric($value) && $value > 0 ? $value : false );
        };
    }

    /**
     * @param $min
     * @throws \Exception
     * @internal param $value
     */
    public function min($min)
    {
        if (!is_numeric($min)) {
            throw new \Exception('Invalid parameter, number expected');
        }
        $this->filter = FILTER_CALLBACK;
        $this->options = function($value) use ($min) {
            return ( is_numeric($value) && $value >= $min ? $value : false );
        };
    }

    /**
     * @param $value
     * @throws \Exception
     */
    public function max($max)
    {
        if (!is_numeric($max)) {
            throw new \Exception('Invalid parameter, number expected');
        }
        $this->filter = FILTER_CALLBACK;
        $this->options = function($value) use ($max){
            return ( is_numeric($value) && $value <= $max ? $value : false );
        };
    }



}