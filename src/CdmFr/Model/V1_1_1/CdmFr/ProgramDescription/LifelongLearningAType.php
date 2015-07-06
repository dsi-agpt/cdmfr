<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ProgramDescription;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing LifelongLearningAType
 */
class LifelongLearningAType extends InfoBlockType
{

    /**
     * @property string $lllValue
     */
    private $lllValue = null;

    /**
     * @property string $lllContext
     */
    private $lllContext = null;

    /**
     * Gets as lllValue
     *
     * @return string
     */
    public function getLllValue()
    {
        return $this->lllValue;
    }

    /**
     * Sets a new lllValue
     *
     * @param string $lllValue
     * @return self
     */
    public function setLllValue($lllValue)
    {
        $this->lllValue = $lllValue;
        return $this;
    }

    /**
     * Gets as lllContext
     *
     * @return string
     */
    public function getLllContext()
    {
        return $this->lllContext;
    }

    /**
     * Sets a new lllContext
     *
     * @param string $lllContext
     * @return self
     */
    public function setLllContext($lllContext)
    {
        $this->lllContext = $lllContext;
        return $this;
    }


}

