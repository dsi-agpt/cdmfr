<?php

namespace CdmFr\Model\V1_1_1\Cdm\CourseType;

/**
 * Class representing CourseCodeAType
 */
class CourseCodeAType
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
     * @property string $userDefined
     */
    private $userDefined = null;

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

    /**
     * Gets as userDefined
     *
     * @return string
     */
    public function getUserDefined()
    {
        return $this->userDefined;
    }

    /**
     * Sets a new userDefined
     *
     * @param string $userDefined
     * @return self
     */
    public function setUserDefined($userDefined)
    {
        $this->userDefined = $userDefined;
        return $this;
    }


}

