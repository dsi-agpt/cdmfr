<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Profession
 */
class Profession
{

    /**
     * @property string $sspCode
     */
    private $sspCode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Profession\RomeDataAType $romeData
     */
    private $romeData = null;

    /**
     * Gets as sspCode
     *
     * @return string
     */
    public function getSspCode()
    {
        return $this->sspCode;
    }

    /**
     * Sets a new sspCode
     *
     * @param string $sspCode
     * @return self
     */
    public function setSspCode($sspCode)
    {
        $this->sspCode = $sspCode;
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

    /**
     * Gets as romeData
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Profession\RomeDataAType
     */
    public function getRomeData()
    {
        return $this->romeData;
    }

    /**
     * Sets a new romeData
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Profession\RomeDataAType $romeData
     * @return self
     */
    public function setRomeData(\CdmFr\Model\V1_1_1\CdmFr\Profession\RomeDataAType $romeData)
    {
        $this->romeData = $romeData;
        return $this;
    }


}

