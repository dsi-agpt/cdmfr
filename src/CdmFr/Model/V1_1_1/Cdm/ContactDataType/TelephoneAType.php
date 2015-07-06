<?php

namespace CdmFr\Model\V1_1_1\Cdm\ContactDataType;

/**
 * Class representing TelephoneAType
 */
class TelephoneAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property string $teltype
     */
    private $teltype = null;

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
     * Gets as teltype
     *
     * @return string
     */
    public function getTeltype()
    {
        return $this->teltype;
    }

    /**
     * Sets a new teltype
     *
     * @param string $teltype
     * @return self
     */
    public function setTeltype($teltype)
    {
        $this->teltype = $teltype;
        return $this;
    }


}

