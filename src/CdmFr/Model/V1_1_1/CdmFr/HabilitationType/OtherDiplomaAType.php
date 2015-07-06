<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing OtherDiplomaAType
 */
class OtherDiplomaAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $name
     */
    private $name = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $otherDiplomaInfo
     */
    private $otherDiplomaInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->name[] = $text;
        return $this;
    }

    /**
     * isset name
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * @param scalar $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as otherDiplomaInfo
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getOtherDiplomaInfo()
    {
        return $this->otherDiplomaInfo;
    }

    /**
     * Sets a new otherDiplomaInfo
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $otherDiplomaInfo
     * @return self
     */
    public function setOtherDiplomaInfo(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $otherDiplomaInfo)
    {
        $this->otherDiplomaInfo = $otherDiplomaInfo;
        return $this;
    }

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


}

