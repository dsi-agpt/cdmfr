<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing HabiliReqTypeValueType
 *
 * Type of the habilitation request
 * XSD Type: habiliReqTypeValueType
 */
class HabiliReqTypeValueType
{

    /**
     * @property string $habiliReqTypeValue
     */
    private $habiliReqTypeValue = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation[] $refHabilitation
     */
    private $refHabilitation = null;

    /**
     * Gets as habiliReqTypeValue
     *
     * @return string
     */
    public function getHabiliReqTypeValue()
    {
        return $this->habiliReqTypeValue;
    }

    /**
     * Sets a new habiliReqTypeValue
     *
     * @param string $habiliReqTypeValue
     * @return self
     */
    public function setHabiliReqTypeValue($habiliReqTypeValue)
    {
        $this->habiliReqTypeValue = $habiliReqTypeValue;
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
     * Adds as refHabilitation
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation $refHabilitation
     */
    public function addToRefHabilitation(\CdmFr\Model\V1_1_1\CdmFr\RefHabilitation $refHabilitation)
    {
        $this->refHabilitation[] = $refHabilitation;
        return $this;
    }

    /**
     * isset refHabilitation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefHabilitation($index)
    {
        return isset($this->refHabilitation[$index]);
    }

    /**
     * unset refHabilitation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefHabilitation($index)
    {
        unset($this->refHabilitation[$index]);
    }

    /**
     * Gets as refHabilitation
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation[]
     */
    public function getRefHabilitation()
    {
        return $this->refHabilitation;
    }

    /**
     * Sets a new refHabilitation
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation[] $refHabilitation
     * @return self
     */
    public function setRefHabilitation(array $refHabilitation)
    {
        $this->refHabilitation = $refHabilitation;
        return $this;
    }


}

