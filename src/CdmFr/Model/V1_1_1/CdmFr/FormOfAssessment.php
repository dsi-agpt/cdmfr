<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing FormOfAssessment
 */
class FormOfAssessment
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment\JuryStructAType $juryStruct
     */
    private $juryStruct = null;

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
     * Gets as juryStruct
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment\JuryStructAType
     */
    public function getJuryStruct()
    {
        return $this->juryStruct;
    }

    /**
     * Sets a new juryStruct
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment\JuryStructAType $juryStruct
     * @return self
     */
    public function setJuryStruct(\CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment\JuryStructAType $juryStruct)
    {
        $this->juryStruct = $juryStruct;
        return $this;
    }


}

