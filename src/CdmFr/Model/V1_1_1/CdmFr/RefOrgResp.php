<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing RefOrgResp
 */
class RefOrgResp
{

    /**
     * @property string[] $respRole
     */
    private $respRole = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $relType
     */
    private $relType = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * Adds as respRole
     *
     * @return self
     * @param string $respRole
     */
    public function addToRespRole($respRole)
    {
        $this->respRole[] = $respRole;
        return $this;
    }

    /**
     * isset respRole
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRespRole($index)
    {
        return isset($this->respRole[$index]);
    }

    /**
     * unset respRole
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRespRole($index)
    {
        unset($this->respRole[$index]);
    }

    /**
     * Gets as respRole
     *
     * @return string[]
     */
    public function getRespRole()
    {
        return $this->respRole;
    }

    /**
     * Sets a new respRole
     *
     * @param string $respRole
     * @return self
     */
    public function setRespRole(array $respRole)
    {
        $this->respRole = $respRole;
        return $this;
    }

    /**
     * Adds as relType
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $relType
     */
    public function addToRelType(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $relType)
    {
        $this->relType[] = $relType;
        return $this;
    }

    /**
     * isset relType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelType($index)
    {
        return isset($this->relType[$index]);
    }

    /**
     * unset relType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelType($index)
    {
        unset($this->relType[$index]);
    }

    /**
     * Gets as relType
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getRelType()
    {
        return $this->relType;
    }

    /**
     * Sets a new relType
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $relType
     * @return self
     */
    public function setRelType(array $relType)
    {
        $this->relType = $relType;
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


}

