<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing GlobalVolumeType
 *
 *
 * XSD Type: globalVolumeType
 */
class GlobalVolumeType
{

    /**
     * @property float $__value
     */
    private $__value = null;

    /**
     * @property string $teachingtype
     */
    private $teachingtype = null;

    /**
     * @property integer $coeff
     */
    private $coeff = null;

    /**
     * @property string $minMax
     */
    private $minMax = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param float $value
     * @return float
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
     * Gets as teachingtype
     *
     * @return string
     */
    public function getTeachingtype()
    {
        return $this->teachingtype;
    }

    /**
     * Sets a new teachingtype
     *
     * @param string $teachingtype
     * @return self
     */
    public function setTeachingtype($teachingtype)
    {
        $this->teachingtype = $teachingtype;
        return $this;
    }

    /**
     * Gets as coeff
     *
     * @return integer
     */
    public function getCoeff()
    {
        return $this->coeff;
    }

    /**
     * Sets a new coeff
     *
     * @param integer $coeff
     * @return self
     */
    public function setCoeff($coeff)
    {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Gets as minMax
     *
     * @return string
     */
    public function getMinMax()
    {
        return $this->minMax;
    }

    /**
     * Sets a new minMax
     *
     * @param string $minMax
     * @return self
     */
    public function setMinMax($minMax)
    {
        $this->minMax = $minMax;
        return $this;
    }


}

