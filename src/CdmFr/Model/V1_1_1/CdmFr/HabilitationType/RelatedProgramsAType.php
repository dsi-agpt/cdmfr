<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing RelatedProgramsAType
 */
class RelatedProgramsAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $relationInfo
     */
    private $relationInfo = null;

    /**
     * Adds as refOrgUnit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    public function addToRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit[] = $refOrgUnit;
        return $this;
    }

    /**
     * isset refOrgUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefOrgUnit($index)
    {
        return isset($this->refOrgUnit[$index]);
    }

    /**
     * unset refOrgUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefOrgUnit($index)
    {
        unset($this->refOrgUnit[$index]);
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[]
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(array $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }

    /**
     * Adds as refProgram
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram
     */
    public function addToRefProgram(\CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram)
    {
        $this->refProgram[] = $refProgram;
        return $this;
    }

    /**
     * isset refProgram
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefProgram($index)
    {
        return isset($this->refProgram[$index]);
    }

    /**
     * unset refProgram
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefProgram($index)
    {
        unset($this->refProgram[$index]);
    }

    /**
     * Gets as refProgram
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefProgram[]
     */
    public function getRefProgram()
    {
        return $this->refProgram;
    }

    /**
     * Sets a new refProgram
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     * @return self
     */
    public function setRefProgram(array $refProgram)
    {
        $this->refProgram = $refProgram;
        return $this;
    }

    /**
     * Gets as relationInfo
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getRelationInfo()
    {
        return $this->relationInfo;
    }

    /**
     * Sets a new relationInfo
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $relationInfo
     * @return self
     */
    public function setRelationInfo(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $relationInfo)
    {
        $this->relationInfo = $relationInfo;
        return $this;
    }


}

