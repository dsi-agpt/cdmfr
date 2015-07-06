<?php

namespace CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType;

/**
 * Class representing StudentsAType
 */
class StudentsAType
{

    /**
     * @property integer $number
     */
    private $number = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }


}

