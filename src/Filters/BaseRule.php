<?php
/**
 * Base class for scalar filters
 */

namespace GK\Filter\Filters;


abstract class BaseRule
{
    /**
     * A name of the field to create a filter rule for
     * @var string
     */
    protected $field_name;

    /**
     * A filter rule
     * @var int
     */
    protected $filter = FILTER_UNSAFE_RAW;

    protected $options = [];

    protected $flags;

    protected $non_empty = false;

    protected $defailt_value;

    /**
     * BaseRule constructor.
     * @param string $field_name
     */
    public function __construct($field_name)
    {
        if (!is_string($field_name)) {
            $field_name = (string) $field_name;
        }
        $this->field_name = $field_name;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * A rule will ensure the field is defined, not NULL and not an empty string.
     * 0 is a non-empty value, unlike in empty() PHP function
     */
    public function notEmpty()
    {
        $this->non_empty = true;
    }

    /**
     * @param mixed $value
     */
    public function default($value)
    {
        $this->defailt_value = $value;
    }

    /**
     * @return array
     */
    public function getFilterRule()
    {
        $return = [
            'filter'    => $this->filter
        ];
        if ($this->options) {
            $return['options'] = $this->options;
        }
        if ($this->flags) {
            $return['flags'] = $this->flags;
        }
        return $return;
    }
}