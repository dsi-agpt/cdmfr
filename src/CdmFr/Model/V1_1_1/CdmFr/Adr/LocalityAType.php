<?php

namespace CdmFr\Model\V1_1_1\CdmFr\Adr;

/**
 * Class representing LocalityAType
 */
class LocalityAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property integer $countyCode
     */
    private $countyCode = null;

    /**
     * @property integer $municipalityCode
     */
    private $municipalityCode = null;

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
     * Gets as countyCode
     *
     * @return integer
     */
    public function getCountyCode()
    {
        return $this->countyCode;
    }

    /**
     * Sets a new countyCode
     *
     * @param integer $countyCode
     * @return self
     */
    public function setCountyCode($countyCode)
    {
        $this->countyCode = $countyCode;
        return $this;
    }

    /**
     * Gets as municipalityCode
     *
     * @return integer
     */
    public function getMunicipalityCode()
    {
        return $this->municipalityCode;
    }

    /**
     * Sets a new municipalityCode
     *
     * @param integer $municipalityCode
     * @return self
     */
    public function setMunicipalityCode($municipalityCode)
    {
        $this->municipalityCode = $municipalityCode;
        return $this;
    }


}

