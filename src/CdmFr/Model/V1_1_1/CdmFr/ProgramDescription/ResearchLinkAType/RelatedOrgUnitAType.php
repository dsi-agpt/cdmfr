<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType;

/**
 * Class representing RelatedOrgUnitAType
 */
class RelatedOrgUnitAType
{

    /**
     * @property string $relationType
     */
    private $relationType = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * Gets as relationType
     *
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Sets a new relationType
     *
     * @param string $relationType
     * @return self
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
        return $this;
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }


}

