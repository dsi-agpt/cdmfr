<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing LevelCode
 */
class LevelCode
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $codeSet
     */
    private $codeSet = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as codeSet
     *
     * @return string
     */
    public function getCodeSet()
    {
        return $this->codeSet;
    }

    /**
     * Sets a new codeSet
     *
     * @param string $codeSet
     * @return self
     */
    public function setCodeSet($codeSet)
    {
        $this->codeSet = $codeSet;
        return $this;
    }


}

