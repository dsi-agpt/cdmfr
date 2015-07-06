<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing HabiliStatusValueType
 *
 * Status of the habilitation process
 * XSD Type: habiliStatusValueType
 */
class HabiliStatusValueType extends InfoBlockType
{

    /**
     * @property string $habiliStatusValue
     */
    private $habiliStatusValue = null;

    /**
     * @property string $habiliNum
     */
    private $habiliNum = null;

    /**
     * Gets as habiliStatusValue
     *
     * @return string
     */
    public function getHabiliStatusValue()
    {
        return $this->habiliStatusValue;
    }

    /**
     * Sets a new habiliStatusValue
     *
     * @param string $habiliStatusValue
     * @return self
     */
    public function setHabiliStatusValue($habiliStatusValue)
    {
        $this->habiliStatusValue = $habiliStatusValue;
        return $this;
    }

    /**
     * Gets as habiliNum
     *
     * @return string
     */
    public function getHabiliNum()
    {
        return $this->habiliNum;
    }

    /**
     * Sets a new habiliNum
     *
     * @param string $habiliNum
     * @return self
     */
    public function setHabiliNum($habiliNum)
    {
        $this->habiliNum = $habiliNum;
        return $this;
    }


}

