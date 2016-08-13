<?php

namespace GK\Filter;

/**
 * Class Builder
 * @package GK\Filter
 */
class Validator
{
    /**
     * @var self
     */
    protected $instance;

    /**
     * @var Rule
     */
    protected $rules = [];

    /**
     * @param array|callable $field
     * @return array
     */
    public function __construct($rules)
    {
        if (is_callable($rules)) {
            $rules = $rules();
        }
        if (!is_array($rules)) {
            throw new \Exception('List of rules expected');
        }
        $this->rules = $rules;
    }

    /**
     * Return rules used as parameters of filter_input_array() and filter_var_array()
     * @return array
     */
    public function getRules()
    {

    }

    public function post()
    {

    }

    public function array()
    {

    }

}