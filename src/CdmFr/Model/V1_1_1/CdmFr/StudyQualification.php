<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing StudyQualification
 */
class StudyQualification
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $competenceDesc
     */
    private $competenceDesc = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\StudyQualification\CompetenceValidityAType
     * $competenceValidity
     */
    private $competenceValidity = null;

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
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToCompetenceDesc(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->competenceDesc[] = $text;
        return $this;
    }

    /**
     * isset competenceDesc
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompetenceDesc($index)
    {
        return isset($this->competenceDesc[$index]);
    }

    /**
     * unset competenceDesc
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompetenceDesc($index)
    {
        unset($this->competenceDesc[$index]);
    }

    /**
     * Gets as competenceDesc
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getCompetenceDesc()
    {
        return $this->competenceDesc;
    }

    /**
     * Sets a new competenceDesc
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $competenceDesc
     * @return self
     */
    public function setCompetenceDesc(array $competenceDesc)
    {
        $this->competenceDesc = $competenceDesc;
        return $this;
    }

    /**
     * Gets as competenceValidity
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\StudyQualification\CompetenceValidityAType
     */
    public function getCompetenceValidity()
    {
        return $this->competenceValidity;
    }

    /**
     * Sets a new competenceValidity
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\StudyQualification\CompetenceValidityAType
     * $competenceValidity
     * @return self
     */
    public function setCompetenceValidity(\CdmFr\Model\V1_1_1\CdmFr\StudyQualification\CompetenceValidityAType $competenceValidity)
    {
        $this->competenceValidity = $competenceValidity;
        return $this;
    }


}

