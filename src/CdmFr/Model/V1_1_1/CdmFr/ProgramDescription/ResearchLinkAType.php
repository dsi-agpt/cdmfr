<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ProgramDescription;

/**
 * Class representing ResearchLinkAType
 */
class ResearchLinkAType
{

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType[]
     * $relatedOrgUnit
     */
    private $relatedOrgUnit = null;

    /**
     * Adds as relatedOrgUnit
     *
     * @return self
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType
     * $relatedOrgUnit
     */
    public function addToRelatedOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType $relatedOrgUnit)
    {
        $this->relatedOrgUnit[] = $relatedOrgUnit;
        return $this;
    }

    /**
     * isset relatedOrgUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelatedOrgUnit($index)
    {
        return isset($this->relatedOrgUnit[$index]);
    }

    /**
     * unset relatedOrgUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelatedOrgUnit($index)
    {
        unset($this->relatedOrgUnit[$index]);
    }

    /**
     * Gets as relatedOrgUnit
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType[]
     */
    public function getRelatedOrgUnit()
    {
        return $this->relatedOrgUnit;
    }

    /**
     * Sets a new relatedOrgUnit
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType[]
     * $relatedOrgUnit
     * @return self
     */
    public function setRelatedOrgUnit(array $relatedOrgUnit)
    {
        $this->relatedOrgUnit = $relatedOrgUnit;
        return $this;
    }


}

