<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing Degree
 */
class Degree extends InfoBlockType
{

    /**
     * @property string $degree
     */
    private $degree = null;

    /**
     * @property string $degreeCode
     */
    private $degreeCode = null;

    /**
     * Gets as degree
     *
     * @return string
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets a new degree
     *
     * @param string $degree
     * @return self
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * Gets as degreeCode
     *
     * @return string
     */
    public function getDegreeCode()
    {
        return $this->degreeCode;
    }

    /**
     * Sets a new degreeCode
     *
     * @param string $degreeCode
     * @return self
     */
    public function setDegreeCode($degreeCode)
    {
        $this->degreeCode = $degreeCode;
        return $this;
    }


}

