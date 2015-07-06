<?php

namespace CdmFr\Model\V1_1_1\Cdm;

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


}

