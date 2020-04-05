<?php

namespace MyApp\Library;

class IntNumber
{
    /**
     * Stores integer value.
     *
     * @var int
     */
    protected $value;

    /**
     * Construct the IntNumber object.
     *
     * @param integer $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * Checks whether the integer value is even or not.
     *
     * @return boolean
     */
    public function isEven(): bool
    {
        return ($this->value % 2) === 0;
    }
}
