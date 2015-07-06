<?php

namespace CdmFr\Model\V1_1_1\CdmFr\OrgUnitType;

use CdmFr\Model\V1_1_1\CdmFr\InfoBlockType;

/**
 * Class representing OrgUnitKindAType
 */
class OrgUnitKindAType extends InfoBlockType
{

    /**
     * @property string $orgType
     */
    private $orgType = null;

    /**
     * @property string $orgTypeCode
     */
    private $orgTypeCode = null;

    /**
     * @property string $responsibleBody
     */
    private $responsibleBody = null;

    /**
     * Gets as orgType
     *
     * @return string
     */
    public function getOrgType()
    {
        return $this->orgType;
    }

    /**
     * Sets a new orgType
     *
     * @param string $orgType
     * @return self
     */
    public function setOrgType($orgType)
    {
        $this->orgType = $orgType;
        return $this;
    }

    /**
     * Gets as orgTypeCode
     *
     * @return string
     */
    public function getOrgTypeCode()
    {
        return $this->orgTypeCode;
    }

    /**
     * Sets a new orgTypeCode
     *
     * @param string $orgTypeCode
     * @return self
     */
    public function setOrgTypeCode($orgTypeCode)
    {
        $this->orgTypeCode = $orgTypeCode;
        return $this;
    }

    /**
     * Gets as responsibleBody
     *
     * @return string
     */
    public function getResponsibleBody()
    {
        return $this->responsibleBody;
    }

    /**
     * Sets a new responsibleBody
     *
     * @param string $responsibleBody
     * @return self
     */
    public function setResponsibleBody($responsibleBody)
    {
        $this->responsibleBody = $responsibleBody;
        return $this;
    }


}

