<?php

namespace GK\Filter\Filters;

/**
 * Validates a value as a number - int or float in decimal, hex,
 * octal or scientific representation
 *
 * @package GK\Filter\Filters
 */
class Integer extends BaseRule
{
    /**
     * A default numeric filter
     * @var int
     */
    protected $filter = FILTER_VALIDATE_INT;

    /**
     * @return $this
     */
    public function positive()
    {
        $this->options['min_range'] = 1;
        return $this;
    }

    /**
     * Minimum value validation
     *
     * @param $value
     * @return $this
     */
    public function min($value)
    {
        $this->options['min_range'] = 1;
        return $this;
    }

    /**
     * Maximum value validation
     *
     * @param $value
     * @return $this
     */
    public function max($value)
    {
        $this->options['max_range'] = 1;
        return $this;
    }

}